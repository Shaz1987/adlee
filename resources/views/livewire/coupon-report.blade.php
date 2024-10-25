<div class="col-span-12">
    <div class="mb-5 flex items-center flex-wrap gap-5">
        {{-- <label class="hidden">
            <select
                class="form-select min-w-[150px] rounded-lg border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent"
                wire:model.live="value">
                <option>Select Filter Type</option>
                @foreach ($filters as $item)
                    <option value="{{ $item['value'] }}">{{ $item['text'] }}</option>
                @endforeach

            </select>
        </label>
        @if (isset($filter['type']) && $filter['type'] === 'select')
            <label class="block">
                <select
                    class="form-select min-w-[150px] rounded-lg border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent"
                    wire:model.live="search">
                    <option>Please choose a option</option>
                    @foreach ($filter['options'] as $option)
                        <option value="{{ $option['value'] }}">{{ $option['text'] }}</option>
                    @endforeach

                </select>
            </label>
        @endif

        @if (isset($filter['type']) && $filter['type'] === 'input')
            @if (isset($filter['options']))
                <label class="block">
                    <select
                        class="form-select min-w-[150px] rounded-lg border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent"
                        wire:model.live="operator">
                        <option>Please choose a operator</option>
                        @foreach ($filter['options'] as $option)
                            <option value="{{ $option['value'] }}">{{ $option['text'] }}</option>
                        @endforeach

                    </select>
                </label>
            @endif

            @if (!empty($operator) && $operator === 'between')
                <label class="block">
                    <input
                        class="form-input min-w-[150px] rounded-lg border border-slate-300 px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent bg-white"
                        placeholder="Start" type="text" wire:model.live="start" />
                </label>
                <label class="block">
                    <input
                        class="form-input min-w-[150px] rounded-lg border border-slate-300 px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent bg-white"
                        placeholder="End" type="text" wire:model.live="end" />
                </label>
            @else
                <label class="block">
                    <input
                        class="form-input min-w-[150px] rounded-lg border border-slate-300 px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent bg-white"
                        placeholder="Search..." type="text" wire:model.live="search" />
                </label>
            @endif
        @endif

        @if (isset($filter['type']) && $filter['type'] === 'date')
            <label class="block">
                <select
                    class="form-select min-w-[150px] rounded-lg border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent"
                    wire:model.live="operator">
                    <option>Please choose a operator</option>
                    @foreach ($filter['options'] as $option)
                        <option value="{{ $option['value'] }}">{{ $option['text'] }}</option>
                    @endforeach

                </select>
            </label>
            @if (!empty($operator) && $operator === 'between')
                <label class="relative flex">
                    <input x-init="$el._x_flatpickr = flatpickr($el)"
                        class="form-input peer min-w-[150px] rounded-lg border border-slate-300 bg-white px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                        placeholder="Start Date" type="text" wire:model.live="start" />
                    <span
                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5 transition-colors duration-200"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </span>
                </label>
                <label class="relative flex">
                    <input x-init="$el._x_flatpickr = flatpickr($el)"
                        class="form-input peer min-w-[150px] rounded-lg border border-slate-300 bg-white px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                        placeholder="End Date" type="text" wire:model.live="end" />
                    <span
                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5 transition-colors duration-200"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </span>
                </label>
            @else
                <label class="relative flex">
                    <input x-init="$el._x_flatpickr = flatpickr($el)"
                        class="form-input peer min-w-[150px] rounded-lg border border-slate-300 bg-white px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                        placeholder="Please select date" type="text" wire:model.live="search" />
                    <span
                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5 transition-colors duration-200"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </span>
                </label>
            @endif

        @endif --}}

        <label class="block">
            <select x-init="$el._tom = new Tom($el, {
                plugins: ['remove_button'],
                create: true,
                {{-- onItemRemove: function(val) {
                    $notification({ text: `${val} removed` })
                } --}}
            })" class=bg-white" multiple placeholder="Seelct Columns" autocomplete="off"
                wire:model.live="show_columns">
                <option value="">Seelct Columns</option>
                @foreach ($columns as $item)
                    <option value="{{ $item['key'] }}">{{ $item['name'] }}</option>
                @endforeach
            </select>
        </label>
    </div>

    <div class="card px-4 pb-4 sm:px-5 mt-3">
        <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-lg my-3">
            Coupons
        </h2>
        @php
            $total_paid_amount = 0;
            $total_balance = 0;
            foreach ($coupons as $coupon) {
                $total_paid_amount += $coupon->transactions_sum_paid_amount ?? 0;
                $total_balance += $coupon->remaining_amount ?? 0;
            }

        @endphp
        <div class="space-y-3 mb-3">
            @if (in_array('total_coupon_amount', $show_columns))
                <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                    Total Coupon Amount: ${{ number_abbreviate($coupons->sum('amount')) }}
                </h2>
            @endif
            @if (in_array('total_paid_amount', $show_columns))
                <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                    Total Paid Amount: ${{ number_abbreviate($total_paid_amount) }}
                </h2>
            @endif
            @if (in_array('total_balance', $show_columns))
                <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                    Total Balance: ${{ number_abbreviate($total_balance) }}
                </h2>
            @endif
        </div>
        <div class="is-scrollbar-hidden min-min-w-[150px] overflow-x-auto">
            <table class="min-w-[150px] text-left">
                <thead>
                    <tr>
                        <th
                            class="whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                            #
                        </th>
                        @if (in_array('sponsor', $show_columns))
                            <th
                                class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                <span>sponsor</span>
                                <label class="block mt-1.5">
                                    <input
                                        class="form-input min-w-[150px] rounded-lg border border-slate-300 bg-white px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        placeholder="Search" type="text" wire:model.live="sponsor" />
                                </label>
                            </th>
                        @endif

                        @if (in_array('type', $show_columns))
                            <th
                                class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                <span>type</span>
                                <label class="block mt-1.5">
                                    <select
                                        class="form-select h-9 rounded border border-slate-300 bg-white px-4 py-2 hover:border-slate-400 focus:border-slate-200 dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-slate-200"
                                        wire:model.live="type">
                                        <option value="both">Both</option>
                                        <option value="virtual">Virtual</option>
                                        <option value="physical">Physical</option>
                                    </select>
                                </label>
                            </th>
                        @endif

                        @if (in_array('language', $show_columns))
                            <th
                                class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                <span>language</span>
                                <label class="block mt-1.5">
                                    <select
                                        class="form-select h-9 rounded border border-slate-300 bg-white px-4 py-2 hover:border-slate-400 focus:border-slate-200 dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-slate-200"
                                        wire:model.live="language">
                                        <option value="all">All</option>
                                        <option value="english">English</option>
                                        <option value="hebrew">Hebrew</option>
                                    </select>
                                </label>
                            </th>
                        @endif

                        @if (in_array('title', $show_columns))
                            <th
                                class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                <span>title</span>
                                <label class="block mt-1.5">
                                    <input
                                        class="form-input min-w-[150px] rounded-lg border border-slate-300 bg-white px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        placeholder="Search" type="text" wire:model.live="title" />
                                </label>
                            </th>
                        @endif

                        @if (in_array('booklet_number', $show_columns))
                            <th
                                class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                <span>booklet number</span>
                                <label class="block mt-1.5">
                                    <input
                                        class="form-input min-w-[150px] rounded-lg border border-slate-300 bg-white px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        placeholder="Search" type="text" wire:model.live="booklet_number" />
                                </label>
                            </th>
                        @endif

                        @if (in_array('coupon_number', $show_columns))
                            <th
                                class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                <span>coupon number</span>
                                <label class="block mt-1.5">
                                    <input
                                        class="form-input min-w-[150px] rounded-lg border border-slate-300 bg-white px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        placeholder="Search" type="text" wire:model.live="coupon_number" />
                                </label>
                            </th>
                        @endif

                        @if (in_array('original_amount', $show_columns))
                            <th
                                class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                <span>Original Amount</span>
                                <div class="flex items-center gap-2 mt-1.5">
                                    <label class="block">
                                        <input
                                            class="form-input min-w-[150px] rounded-lg border border-slate-300 bg-white px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Search" type="text" wire:model.live="original_amount" />
                                    </label>
                                    <label class="block">
                                        <select
                                            class="form-select h-9 rounded border border-slate-300 bg-white px-4 py-2 hover:border-slate-400 focus:border-slate-200 dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-slate-200"
                                            wire:model.live="original_amount_operator">
                                            <option value="=">Equal</option>
                                            <option value=">">Greater Than</option>
                                            <option value="<">Less Than</option>
                                        </select>
                                    </label>
                                </div>

                            </th>
                        @endif

                        @if (in_array('paid_amount', $show_columns))
                            <th
                                class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                <span>Paid Amount</span>
                                <div class="flex items-center gap-2 mt-1.5">
                                    <label class="block">
                                        <input
                                            class="form-input min-w-[150px] rounded-lg border border-slate-300 bg-white px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Search" type="text" wire:model.live="amount_paid" />
                                    </label>
                                    <label class="block">
                                        <select
                                            class="form-select h-9 rounded border border-slate-300 bg-white px-4 py-2 hover:border-slate-400 focus:border-slate-200 dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-slate-200"
                                            wire:model.live="amount_paid_operator">
                                            <option value="=">Equal</option>
                                            <option value=">">Greater Than</option>
                                            <option value="<">Less Than</option>
                                        </select>
                                    </label>
                                </div>
                            </th>
                        @endif

                        @if (in_array('coupon_balance', $show_columns))
                            <th
                                class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                <span>Coupon Balance</span>
                                <div class="flex items-center gap-2 mt-1.5">
                                    <label class="block">
                                        <input
                                            class="form-input min-w-[150px] rounded-lg border border-slate-300 bg-white px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Search" type="text" wire:model.live="coupon_balance" />
                                    </label>
                                    <label class="block">
                                        <select
                                            class="form-select h-9 rounded border border-slate-300 bg-white px-4 py-2 hover:border-slate-400 focus:border-slate-200 dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-slate-200"
                                            wire:model.live="coupon_balance_operator">
                                            <option value="=">Equal</option>
                                            <option value=">">Greater Than</option>
                                            <option value="<">Less Than</option>
                                        </select>
                                    </label>
                                </div>
                            </th>
                        @endif

                        @if (in_array('status', $show_columns))
                            <th
                                class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                <span>Status</span>
                                <label class="block mt-1.5">
                                    <select
                                        class="form-select h-9 rounded border border-slate-300 bg-white px-4 py-2 hover:border-slate-400 focus:border-slate-200 dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-slate-200"
                                        wire:model.live="status">
                                        <option value="all">All</option>
                                        {{-- <option value="created">Created</option> --}}
                                        <option value="activated">Activated</option>
                                        <option value="redeemed">Redeemed</option>
                                        <option value="signed">Signed</option>
                                        <option value="printed">Printed</option>
                                        <option value="partial_paid_out">Partial Paid Out</option>
                                        <option value="paid_out">Paid Out</option>
                                        <option value="invited_to_redeem">Invited to Redeem</option>
                                    </select>
                                </label>
                            </th>
                        @endif

                        @if (in_array('coupon_created_at', $show_columns))
                            <th
                                class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                <span>Coupon Creation Date</span>
                                <div class="flex items-center gap-2 mt-1.5">
                                    <label class="relative flex">
                                        <input x-init="$el._x_flatpickr = flatpickr($el)"
                                            class="form-input peer min-w-[150px] rounded-lg border border-slate-300 bg-white px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Select Date" type="text" wire:model.live="created_at" />
                                        <span
                                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="size-5 transition-colors duration-200" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </span>
                                    </label>
                                    <label class="block">
                                        <select
                                            class="form-select h-9 rounded border border-slate-300 bg-white px-4 py-2 hover:border-slate-400 focus:border-slate-200 dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-slate-200"
                                            wire:model.live="created_at_operator">
                                            <option value="=">Equal</option>
                                            <option value=">">Greater Than</option>
                                            <option value="<">Less Than</option>
                                        </select>
                                    </label>
                                </div>
                            </th>
                        @endif

                        @if (in_array('coupon_activated_at', $show_columns))
                            <th
                                class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                <span>Activated Coupon Date</span>
                                <div class="flex items-center gap-2 mt-1.5">
                                    <label class="relative flex">
                                        <input x-init="$el._x_flatpickr = flatpickr($el)"
                                            class="form-input peer min-w-[150px] rounded-lg border border-slate-300 bg-white px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Select Date" type="text"
                                            wire:model.live="activated_at" />
                                        <span
                                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="size-5 transition-colors duration-200" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </span>
                                    </label>
                                    <label class="block">
                                        <select
                                            class="form-select h-9 rounded border border-slate-300 bg-white px-4 py-2 hover:border-slate-400 focus:border-slate-200 dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-slate-200"
                                            wire:model.live="activated_at_operator">
                                            <option value="=">Equal</option>
                                            <option value=">">Greater Than</option>
                                            <option value="<">Less Than</option>
                                        </select>
                                    </label>
                                </div>
                            </th>
                        @endif

                        @if (in_array('coupon_redeemed', $show_columns))
                            <th
                                class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                <span>Coupon Redeemed</span>
                                <label class="block mt-1.5">
                                    <select
                                        class="form-select h-9 rounded border border-slate-300 bg-white px-4 py-2 hover:border-slate-400 focus:border-slate-200 dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-slate-200"
                                        wire:model.live="redeemed">
                                        <option value="all">All</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </label>
                            </th>
                        @endif

                        @if (in_array('coupon_redeemed_by', $show_columns))
                            <th
                                class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                <span>Redeemed By</span>
                                <label class="block mt-1.5">
                                    <input
                                        class="form-input min-w-[150px] rounded-lg border border-slate-300 bg-white px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        placeholder="Search" type="text" wire:model.live="bbo" />
                                </label>
                            </th>
                        @endif

                        @if (in_array('coupon_redeemed_at', $show_columns))
                            <th
                                class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                <span>Redeemed Date</span>
                                <div class="flex items-center gap-2 mt-1.5">
                                    <label class="relative flex">
                                        <input x-init="$el._x_flatpickr = flatpickr($el)"
                                            class="form-input peer min-w-[150px] rounded-lg border border-slate-300 bg-white px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Select Date" type="text" wire:model.live="redeemed_at" />
                                        <span
                                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="size-5 transition-colors duration-200" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </span>
                                    </label>
                                    <label class="block">
                                        <select
                                            class="form-select h-9 rounded border border-slate-300 bg-white px-4 py-2 hover:border-slate-400 focus:border-slate-200 dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-slate-200"
                                            wire:model.live="redeemed_at_operator">
                                            <option value="=">Equal</option>
                                            <option value=">">Greater Than</option>
                                            <option value="<">Less Than</option>
                                        </select>
                                    </label>
                                </div>
                            </th>
                        @endif

                        @if (in_array('coupon_signed_at', $show_columns))
                            <th
                                class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                <span>E-signed Date</span>
                                <div class="flex items-center gap-2 mt-1.5">
                                    <label class="relative flex">
                                        <input x-init="$el._x_flatpickr = flatpickr($el)"
                                            class="form-input peer min-w-[150px] rounded-lg border border-slate-300 bg-white px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Select Date" type="text" wire:model.live="redeemed_at" />
                                        <span
                                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="size-5 transition-colors duration-200" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </span>
                                    </label>
                                    <label class="block">
                                        <select
                                            class="form-select h-9 rounded border border-slate-300 bg-white px-4 py-2 hover:border-slate-400 focus:border-slate-200 dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-slate-200"
                                            wire:model.live="redeemed_at_operator">
                                            <option value="=">Equal</option>
                                            <option value=">">Greater Than</option>
                                            <option value="<">Less Than</option>
                                        </select>
                                    </label>
                                </div>
                            </th>
                        @endif

                        @if (in_array('coupon_printed_at', $show_columns))
                            <th
                                class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                <span>Printed Date</span>
                                <div class="flex items-center gap-2 mt-1.5">
                                    <label class="relative flex">
                                        <input x-init="$el._x_flatpickr = flatpickr($el)"
                                            class="form-input peer min-w-[150px] rounded-lg border border-slate-300 bg-white px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Select Date" type="text" wire:model.live="printed_at" />
                                        <span
                                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="size-5 transition-colors duration-200" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </span>
                                    </label>
                                    <label class="block">
                                        <select
                                            class="form-select h-9 rounded border border-slate-300 bg-white px-4 py-2 hover:border-slate-400 focus:border-slate-200 dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-slate-200"
                                            wire:model.live="printed_at_operator">
                                            <option value="=">Equal</option>
                                            <option value=">">Greater Than</option>
                                            <option value="<">Less Than</option>
                                        </select>
                                    </label>
                                </div>
                            </th>
                        @endif

                        @if (in_array('coupon_booklet_cost', $show_columns))
                            <th
                                class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                <span>Coupon Booklet Cost</span>
                                <label class="block mt-1.5">
                                    <select
                                        class="form-select h-9 rounded border border-slate-300 bg-white px-4 py-2 hover:border-slate-400 focus:border-slate-200 dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-slate-200"
                                        wire:model.live="coupon_booklet_cost">
                                        <option value="both">Both</option>
                                        <option value="free">Free</option>
                                        <option value="paid">Paid</option>
                                    </select>
                                </label>
                            </th>
                        @endif

                        @if (in_array('payment_applied', $show_columns))
                            <th
                                class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                <span>Payment Applied</span>
                                <label class="block mt-1.5">
                                    <select
                                        class="form-select h-9 rounded border border-slate-300 bg-white px-4 py-2 hover:border-slate-400 focus:border-slate-200 dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-slate-200"
                                        wire:model.live="payment_applied">
                                        <option value="all">All</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </label>
                            </th>
                        @endif

                        @if (in_array('coupon_payout_on', $show_columns))
                            <th
                                class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                <span>Scheduled Due Date</span>
                                <div class="flex items-center gap-2 mt-1.5">
                                    <label class="relative flex">
                                        <input x-init="$el._x_flatpickr = flatpickr($el)"
                                            class="form-input peer min-w-[150px] rounded-lg border border-slate-300 bg-white px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Select Date" type="text" wire:model.live="payout_on" />
                                        <span
                                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="size-5 transition-colors duration-200" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </span>
                                    </label>
                                    <label class="block">
                                        <select
                                            class="form-select h-9 rounded border border-slate-300 bg-white px-4 py-2 hover:border-slate-400 focus:border-slate-200 dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-slate-200"
                                            wire:model.live="payout_on_operator">
                                            <option value="=">Equal</option>
                                            <option value=">">Greater Than</option>
                                            <option value="<">Less Than</option>
                                        </select>
                                    </label>
                                </div>
                            </th>
                        @endif

                        @if (in_array('coupon_payout_at', $show_columns))
                            <th
                                class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                <span>Payout Completed Date</span>
                                <div class="flex items-center gap-2 mt-1.5">
                                    <label class="relative flex">
                                        <input x-init="$el._x_flatpickr = flatpickr($el)"
                                            class="form-input peer min-w-[150px] rounded-lg border border-slate-300 bg-white px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Select Date" type="text" wire:model.live="payout_at" />
                                        <span
                                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="size-5 transition-colors duration-200" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </span>
                                    </label>
                                    <label class="block">
                                        <select
                                            class="form-select h-9 rounded border border-slate-300 bg-white px-4 py-2 hover:border-slate-400 focus:border-slate-200 dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-slate-200"
                                            wire:model.live="payout_at_operator">
                                            <option value="=">Equal</option>
                                            <option value=">">Greater Than</option>
                                            <option value="<">Less Than</option>
                                        </select>
                                    </label>
                                </div>
                            </th>
                        @endif

                        @if (in_array('coupon_due_by', $show_columns))
                            <th
                                class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                <span>Due By</span>
                                <div class="flex items-center gap-2 mt-1.5">
                                    <label class="block">
                                        <select
                                            class="form-select h-9 rounded border border-slate-300 bg-white px-4 py-2 hover:border-slate-400 focus:border-slate-200 dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-slate-200"
                                            wire:model.live="due_by">
                                            <option value="all">All</option>
                                            <option value="7">7</option>
                                            <option value="14">14</option>
                                            <option value="30">30</option>
                                            <option value="60">60</option>
                                            <option value="90">90</option>
                                        </select>
                                    </label>
                                    <label class="block">
                                        <select
                                            class="form-select h-9 rounded border border-slate-300 bg-white px-4 py-2 hover:border-slate-400 focus:border-slate-200 dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-slate-200"
                                            wire:model.live="due_by_operator">
                                            <option value="=">Equal</option>
                                            <option value=">">Greater Than</option>
                                            <option value="<">Less Than</option>
                                        </select>
                                    </label>
                                </div>
                            </th>
                        @endif

                        @if (in_array('transaction_method', $show_columns))
                            <th
                                class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                <span>Transaction Method</span>
                                <label class="block mt-1.5">
                                    <select
                                        class="form-select h-9 rounded border border-slate-300 bg-white px-4 py-2 hover:border-slate-400 focus:border-slate-200 dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-slate-200"
                                        wire:model.live="transaction_method">
                                        <option value="both">Both</option>
                                        <option value="credit-card">Credit Card</option>
                                        <option value="ach">ACH</option>
                                    </select>
                                </label>
                            </th>
                        @endif

                        @if (in_array('transaction_fee_payer', $show_columns))
                            <th
                                class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                <span>Transaction Fee Payer</span>
                                <label class="block mt-1.5">
                                    <select
                                        class="form-select h-9 rounded border border-slate-300 bg-white px-4 py-2 hover:border-slate-400 focus:border-slate-200 dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-slate-200"
                                        wire:model.live="fee_payer">
                                        <option value="either">Either</option>
                                        <option value="sponsor">Sponsor</option>
                                        <option value="bbo">BBO</option>
                                    </select>
                                </label>
                            </th>
                        @endif

                        @if (in_array('transaction_fee', $show_columns))
                            <th
                                class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                <span>Transaction Fee</span>
                                <div class="flex items-center gap-2 mt-1.5">
                                    <label class="block">
                                        <input
                                            class="form-input min-w-[150px] rounded-lg border border-slate-300 bg-white px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Search" type="text" wire:model.live="transaction_fee" />
                                    </label>
                                    <label class="block">
                                        <select
                                            class="form-select h-9 rounded border border-slate-300 bg-white px-4 py-2 hover:border-slate-400 focus:border-slate-200 dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-slate-200"
                                            wire:model.live="transaction_fee_operator">
                                            <option value="=">Equal</option>
                                            <option value=">">Greater Than</option>
                                            <option value="<">Less Than</option>
                                        </select>
                                    </label>
                                </div>
                            </th>
                        @endif

                        @if (in_array('transaction_fee_cost', $show_columns))
                            <th
                                class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                <span>Transaction Fee Cost</span>
                                <div class="flex items-center gap-2 mt-1.5">
                                    <label class="block">
                                        <input
                                            class="form-input min-w-[150px] rounded-lg border border-slate-300 bg-white px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Search" type="text"
                                            wire:model.live="transaction_fee_cost" />
                                    </label>
                                    <label class="block">
                                        <select
                                            class="form-select h-9 rounded border border-slate-300 bg-white px-4 py-2 hover:border-slate-400 focus:border-slate-200 dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-slate-200"
                                            wire:model.live="transaction_fee_cost_operator">
                                            <option value="=">Equal</option>
                                            <option value=">">Greater Than</option>
                                            <option value="<">Less Than</option>
                                        </select>
                                    </label>
                                </div>
                            </th>
                        @endif

                        @if (in_array('credit_card_fee', $show_columns))
                            <th
                                class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                <span>Credit Card Fee</span>
                                <div class="flex items-center gap-2 mt-1.5">
                                    <label class="block">
                                        <input
                                            class="form-input min-w-[150px] rounded-lg border border-slate-300 bg-white px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Search" type="text" wire:model.live="credit_card_fee" />
                                    </label>
                                    <label class="block">
                                        <select
                                            class="form-select h-9 rounded border border-slate-300 bg-white px-4 py-2 hover:border-slate-400 focus:border-slate-200 dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-slate-200"
                                            wire:model.live="credit_card_fee_operator">
                                            <option value="=">Equal</option>
                                            <option value=">">Greater Than</option>
                                            <option value="<">Less Than</option>
                                        </select>
                                    </label>
                                </div>
                            </th>
                        @endif

                        @if (in_array('credit_card_fee_cost', $show_columns))
                            <th
                                class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                <span>Credit Card Fee Cost</span>
                                <div class="flex items-center gap-2 mt-1.5">
                                    <label class="block">
                                        <input
                                            class="form-input min-w-[150px] rounded-lg border border-slate-300 bg-white px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Search" type="text"
                                            wire:model.live="credit_card_fee_cost" />
                                    </label>
                                    <label class="block">
                                        <select
                                            class="form-select h-9 rounded border border-slate-300 bg-white px-4 py-2 hover:border-slate-400 focus:border-slate-200 dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-slate-200"
                                            wire:model.live="credit_card_fee_cost_operator">
                                            <option value="=">Equal</option>
                                            <option value=">">Greater Than</option>
                                            <option value="<">Less Than</option>
                                        </select>
                                    </label>
                                </div>
                            </th>
                        @endif

                        @if (in_array('ach_fee', $show_columns))
                            <th
                                class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                <span>ACH Fee</span>
                                <div class="flex items-center gap-2 mt-1.5">
                                    <label class="block">
                                        <input
                                            class="form-input min-w-[150px] rounded-lg border border-slate-300 bg-white px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Search" type="text" wire:model.live="ach_fee" />
                                    </label>
                                    <label class="block">
                                        <select
                                            class="form-select h-9 rounded border border-slate-300 bg-white px-4 py-2 hover:border-slate-400 focus:border-slate-200 dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-slate-200"
                                            wire:model.live="ach_fee_operator">
                                            <option value="=">Equal</option>
                                            <option value=">">Greater Than</option>
                                            <option value="<">Less Than</option>
                                        </select>
                                    </label>
                                </div>
                            </th>
                        @endif

                        @if (in_array('ach_fee_cost', $show_columns))
                            <th
                                class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                <span>ACH Fee Cost</span>
                                <div class="flex items-center gap-2 mt-1.5">
                                    <label class="block">
                                        <input
                                            class="form-input min-w-[150px] rounded-lg border border-slate-300 bg-white px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Search" type="text" wire:model.live="ach_fee_cost" />
                                    </label>
                                    <label class="block">
                                        <select
                                            class="form-select h-9 rounded border border-slate-300 bg-white px-4 py-2 hover:border-slate-400 focus:border-slate-200 dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-slate-200"
                                            wire:model.live="ach_fee_cost_operator">
                                            <option value="=">Equal</option>
                                            <option value=">">Greater Than</option>
                                            <option value="<">Less Than</option>
                                        </select>
                                    </label>
                                </div>
                            </th>
                        @endif

                    </tr>
                </thead>
                @forelse ($coupons as $coupon)
                    @php
                        $paidAmount = $coupon->transactions_sum_paid_amount ?? 0;
                        $paidAmountOriginal = $coupon->transactions_sum_amount ?? 0;
                    @endphp
                    <tbody x-data="{ expanded: false }">
                        <tr class="border-y border-transparent">
                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                {{ $loop->iteration + $coupons->firstItem() - 1 }}
                            </td>
                            @if (in_array('sponsor', $show_columns))
                                <td class="whitespace-nowrap flex items-center gap-2 px-4 py-3 sm:px-5">
                                    <div class="avatar flex">
                                        <img class="rounded-full" src="{{ asset($coupon->sponsor?->company_logo) }}"
                                            alt="ٰImage" />
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="text-sm">{{ $coupon->sponsor?->company_name }}</span>
                                        <span>{{ $coupon->user?->email }}</span>
                                    </div>
                                </td>
                            @endif

                            @if (in_array('type', $show_columns))
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                    {{ is_null($coupon->booklet_id) ? 'Virtual' : 'Physical' }}
                                </td>
                            @endif

                            @if (in_array('language', $show_columns))
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5 capitalize">
                                    {{ $coupon->language }}
                                </td>
                            @endif


                            @if (in_array('title', $show_columns))
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                    {{ $coupon->title }}
                                </td>
                            @endif

                            @if (in_array('booklet_number', $show_columns))
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                    {{ $coupon->booklet ? $coupon->booklet->number : '-' }}
                                </td>
                            @endif

                            @if (in_array('coupon_number', $show_columns))
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                    {{ $coupon->number }}
                                </td>
                            @endif

                            @if (in_array('original_amount', $show_columns))
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                    ${{ number_abbreviate($coupon->amount) }}
                                </td>
                            @endif

                            @if (in_array('paid_amount', $show_columns))
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                    ${{ number_abbreviate($paidAmount) }}
                                </td>
                            @endif

                            @if (in_array('coupon_balance', $show_columns))
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                    ${{ $coupon->remaining_amount < 0 ? 0 : number_abbreviate($coupon->remaining_amount) }}
                                </td>
                            @endif

                            @if (in_array('status', $show_columns))
                                @php
                                    $status = 'Created';
                                    if ($coupon->redeemed_by) {
                                        $status = 'Invited to Redeem';
                                    }

                                    if ($coupon->activated_at) {
                                        $status = 'Activated';
                                    }

                                    if ($coupon->redeemed_at) {
                                        $status = 'Redeemed';
                                    }

                                    if ($coupon->task?->signed_at) {
                                        $status = 'Signed';
                                    }

                                    if ($coupon->task?->printed_at) {
                                        $status = 'Printed';
                                    }

                                    if ($paidAmount != 0) {
                                        $status = 'Partial Paid Out';
                                    }

                                    if ($coupon->payout_at) {
                                        $status = 'Paid Out';
                                    }
                                @endphp
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                    <div class="flex space-x-2">
                                        <div class="badge rounded-full border border-info text-info">
                                            {{ $status }}
                                        </div>
                                    </div>
                                </td>
                            @endif

                            @if (in_array('coupon_created_at', $show_columns))
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                    {{ $coupon->created_at?->format('m-d-Y h:i:A') }}
                                </td>
                            @endif

                            @if (in_array('coupon_activated_at', $show_columns))
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                    {{ $coupon->activated_at ? $coupon->activated_at->format('m-d-Y h:i:A') : '-' }}
                                </td>
                            @endif

                            @if (in_array('coupon_redeemed', $show_columns))
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                    {{ is_null($coupon->redeemed_at) ? 'No' : 'Yes' }}
                                </td>
                            @endif

                            @if (in_array('coupon_redeemed_by', $show_columns))
                                @if ($coupon->redeem)
                                    <td class="whitespace-nowrap flex items-center gap-2 px-4 py-3 sm:px-5">
                                        <div class="avatar flex">
                                            <img class="rounded-full"
                                                src="{{ asset($coupon->redeem?->adSpaceOwner?->company_logo) }}"
                                                alt="ٰImage" />
                                        </div>
                                        <div class="flex flex-col">
                                            <span
                                                class="text-sm">{{ $coupon->redeem?->adSpaceOwner?->company_name }}</span>
                                            <span>{{ $coupon->redeem?->email }}</span>
                                        </div>
                                    </td>
                                @else
                                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                        -
                                    </td>
                                @endif
                            @endif

                            @if (in_array('coupon_redeemed_at', $show_columns))
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                    {{ $coupon->redeemed_at ? $coupon->redeemed_at->format('m-d-Y h:i:A') : '-' }}
                                </td>
                            @endif

                            @if (in_array('coupon_signed_at', $show_columns))
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                    {{ $coupon->task && $coupon->task->signed_at ? $coupon->task->signed_at->format('m-d-Y h:i:A') : '-' }}
                                </td>
                            @endif

                            @if (in_array('coupon_printed_at', $show_columns))
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                    {{ $coupon->task && $coupon->task->printed_at ? $coupon->task->printed_at->format('m-d-Y h:i:A') : '-' }}
                                </td>
                            @endif

                            @if (in_array('coupon_booklet_cost', $show_columns))
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5 capitalize">
                                    {{ is_null($coupon->booklet) ? '-' : (is_null($coupon->booklet->print) ? '-' : $coupon->booklet->print->type) }}
                                </td>
                            @endif

                            @if (in_array('payment_applied', $show_columns))
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                    {{ is_null($coupon->booklet) ? '-' : (is_null($coupon->booklet->print) ? '-' : ($coupon->booklet->print->type === 'free' ? 'No' : 'Yes')) }}
                                </td>
                            @endif

                            @if (in_array('coupon_payout_on', $show_columns))
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                    {{ $coupon->payout_on ? $coupon->payout_on->format('m-d-Y h:i:A') : '-' }}
                                </td>
                            @endif

                            @if (in_array('coupon_payout_at', $show_columns))
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                    {{ $coupon->payout_at ? $coupon->payout_at->format('m-d-Y h:i:A') : '-' }}
                                </td>
                            @endif

                            @if (in_array('coupon_due_by', $show_columns))
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                    @php
                                        if ($coupon->payout_on) {
                                            $days = now()->diffInDays($coupon->payout_on);
                                        }
                                    @endphp
                                    {{ $coupon->payout_on ? ($days > 0 ? round($days) : 0) : '-' }}
                                </td>
                            @endif

                            @if (in_array('transaction_method', $show_columns))
                                @php
                                    $transaction =
                                        $coupon->transactions->count() > 0 ? $coupon->transactions->first() : null;
                                @endphp
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5 capitalize">
                                    {{ $transaction ? str_replace('-', ' ', $transaction->type) : '-' }}
                                </td>
                            @endif

                            @if (in_array('transaction_fee_payer', $show_columns))
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5 capitalize">
                                    {{ $transaction ? ($transaction->commission_paid ? 'Sponsor' : 'BBO') : '-' }}
                                </td>
                            @endif

                            @if (in_array('transaction_fee', $show_columns))
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5 capitalize">
                                    {{ $transaction ? $transaction->service_fee_percentage . '%' : '-' }}
                                </td>
                            @endif

                            @if (in_array('transaction_fee_cost', $show_columns))
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5 capitalize">
                                    {{ $transaction ? "$" . number_abbreviate($transaction->service_fee) : '-' }}
                                </td>
                            @endif

                            @if (in_array('credit_card_fee', $show_columns))
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5 capitalize">
                                    {{ $transaction && $transaction->type === 'credit-card' ? $transaction->transaction_fee_percentage . '%' : '-' }}
                                </td>
                            @endif

                            @if (in_array('credit_card_fee_cost', $show_columns))
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5 capitalize">
                                    {{ $transaction && $transaction->type === 'credit-card' ? "$" . number_abbreviate($transaction->transaction_fee) : '-' }}
                                </td>
                            @endif

                            @if (in_array('ach_fee', $show_columns))
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5 capitalize">
                                    {{ $transaction && $transaction->type !== 'credit-card' ? $transaction->transaction_fee_percentage . '%' : '-' }}
                                </td>
                            @endif

                            @if (in_array('ach_fee_cost', $show_columns))
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5 capitalize">
                                    {{ $transaction && $transaction->type !== 'credit-card' ? "$" . number_abbreviate($transaction->transaction_fee) : '-' }}
                                </td>
                            @endif

                        </tr>
                    </tbody>
                @empty
                    <tbody>
                        <tr class="border-y border-transparent">
                            <td class="whitespace-nowrap px-4 py-3 sm:px-5" colspan="11">No coupon</td>
                        </tr>
                    </tbody>
                @endforelse

            </table>
        </div>

        <div class="px-4 py-4">
            {{ $coupons->links() }}
        </div>
    </div>
</div>
