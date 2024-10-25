<?php

namespace App\Livewire\Sponsor;

use App\Enums\TemplateLanguage;
use App\Enums\TemplateType;
use App\Models\SponsorTemplate;
use App\Models\Template;
use Livewire\Component;

class Templates extends Component
{
    public string $language = TemplateLanguage::ENGLISH->value;
    public array $selectedTemplates = [];
    public array $templateCategories = [];
    public array $selectedCategories = [];
    public int $perCategoryTemplateLimit = 0;


    public function mount()
    {
        $this->perCategoryTemplateLimit = request()->user()->plan()?->template_limit;
        foreach (auth()->user()->templates as $item) {
            $this->selectedTemplates[] = $item->template_id;
            $this->selectedCategories[] = $item->category_id;
        }
    }

    public function render()
    {
        $templatesByCategories = Template::query()
            ->with(['category'])
            ->select(['id', 'uuid', 'title', 'view', 'preview', 'language', 'category_id', 'sub_category_id'])
            ->whereLanguage($this->language)
            ->whereType(TemplateType::SPONSOR->value)
            ->whereActive(true)
            ->whereDate('publish_at', '<=', now())
            ->get()
            ->groupBy('category_id');

        $this->templateCategories = [];
        foreach ($templatesByCategories as $categoryId => $templates) {
            $this->templateCategories[] = $categoryId;
        }

        return view('livewire.sponsor.templates', [
            'categories' => $templatesByCategories,
        ]);
    }

    public function toggleTemplates($id, $categoryId)
    {
        if (in_array($id, $this->selectedTemplates)) {
            // remove templates from the list
            $key = array_search($id, $this->selectedTemplates);
            unset($this->selectedTemplates[$key]);

            // remove category from the list
            $key = array_search($categoryId, $this->selectedCategories);
            unset($this->selectedCategories[$key]);
        } else {
            // count the number of templates for specific category
            $categoryExistsCount = count(array_filter($this->selectedCategories, function ($value) use ($categoryId) {
                return $value == $categoryId;
            }));

            // user has not reached the limit of selecting templates for each category
            if ($categoryExistsCount < $this->perCategoryTemplateLimit) {
                // adding template to the list
                $this->selectedTemplates[] = $id;

                // adding category to the list
                $this->selectedCategories[] = $categoryId;
            } else {
                // user has reached the limit of selecting templates for each category
                session()->flash('error', 'You can only choose ' . $this->perCategoryTemplateLimit . ' templates from each category in your current subscription plan.');
            }
        }
    }

    public function saveTemplates()
    {
        // make sure user has select template from each category
        if (count($this->templateCategories) != count(array_unique($this->selectedCategories))) {
            // $this->js("alert('Please select atleast one template from each category.')");
            session()->flash('error', 'Please select atleast one template from each category.');
            return;
        }

        // delete all old templates of sponsors
        SponsorTemplate::where('sponsor_id', auth()->user()->sponsor->id)->delete();

        // saving the selected templates to database
        foreach ($this->selectedTemplates as $templateId) {
            $template = Template::select(['category_id', 'sub_category_id'])->find($templateId);
            SponsorTemplate::updateOrCreate(['user_id' => auth()->id(), 'template_id' => $templateId], [
                'sponsor_id' => auth()->user()->sponsor->id,
                'category_id' => $template->category_id,
                'sub_category_id' => $template->sub_category_id,
            ]);
        }

        return to_route('sponsors.dashboard')->with('status', 'You have successfully complated onboarding process.');

    }
}
