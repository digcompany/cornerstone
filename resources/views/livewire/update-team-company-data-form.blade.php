<div>
    <x-jet-form-section submit="updateTeamCompanyData">
        <x-slot name="title">
            {{ __('Company Info') }}
        </x-slot>

        <x-slot name="description">
            {{ __('The company\'s address and contact details that will be shown on invoices and other documents.') }}
        </x-slot>

        <x-slot name="form">

            <!-- Company Phone -->
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="phone" value="{{ __('Company Phone') }}" />

                <x-jet-input id="phone"
                            type="text"
                            class="block w-full mt-1"
                            wire:model.defer="state.phone"
                            :disabled="! Gate::check('update', $team)" />

                <x-jet-input-error for="phone" class="mt-2" />
            </div>

            <!-- Company Phone -->
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="fax" value="{{ __('Company Fax') }}" />

                <x-jet-input id="fax"
                            type="text"
                            class="block w-full mt-1"
                            wire:model.defer="state.fax"
                            :disabled="! Gate::check('update', $team)" />

                <x-jet-input-error for="fax" class="mt-2" />
            </div>

            <!-- Company Address -->

            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="street" value="{{ __('Company Address Line One') }}" />

                <x-jet-input id="street"
                            type="text"
                            class="block w-full mt-1"
                            wire:model.defer="state.address.street"
                            :disabled="! Gate::check('update', $team)" />

                <x-jet-input-error for="street" class="mt-2" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="lineTwo" value="{{ __('Company Address Line Two') }}" />

                <x-jet-input id="lineTwo"
                            type="text"
                            class="block w-full mt-1"
                            wire:model.defer="state.address.lineTwo"
                            :disabled="! Gate::check('update', $team)" />

                <x-jet-input-error for="lineTwo" class="mt-2" />
            </div>

            <div class="col-span-6 sm:col-span-4">

                <x-jet-label for="lineTwo" value="{{ __('Company City') }}" />

                <x-jet-input id="city"
                            type="text"
                            class="block w-full mt-1"
                            wire:model.defer="state.address.city"
                            :disabled="! Gate::check('update', $team)" />

                <x-jet-input-error for="city" class="mt-2" />
            </div>

            <div class="col-span-6 sm:col-span-4">

                <x-jet-label for="state" value="{{ __('Company State') }}" />

                <x-jet-input id="state"
                            type="text"
                            class="block w-full mt-1"
                            wire:model.defer="state.address.state"
                            :disabled="! Gate::check('update', $team)" />

                <x-jet-input-error for="state" class="mt-2" />

            </div>

            <div class="col-span-6 sm:col-span-4">

                <x-jet-label for="zip" value="{{ __('Company Zip') }}" />

                <x-jet-input id="zip"
                            type="text"
                            class="block w-full mt-1"
                            wire:model.defer="state.address.zip"
                            :disabled="! Gate::check('update', $team)" />

                <x-jet-input-error for="zip" class="mt-2" />

            </div>

            <div class="col-span-6 sm:col-span-4">

                <x-jet-label for="country" value="{{ __('Company Country') }}" />

                <x-jet-input id="country"
                            type="text"
                            class="block w-full mt-1"
                            wire:model.defer="state.address.country"
                            :disabled="! Gate::check('update', $team)" />

                <x-jet-input-error for="country" class="mt-2" />

            </div>


        </x-slot>

        @if (Gate::check('update', $team))
            <x-slot name="actions">
                <x-jet-action-message class="mr-3" on="saved">
                    {{ __('Saved.') }}
                </x-jet-action-message>

                <x-jet-button>
                    {{ __('Save') }}
                </x-jet-button>
            </x-slot>
        @endif
    </x-jet-form-section>

</div>
