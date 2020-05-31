@push('scripts')
<script type="text/x-template" id="input-document">
        <div class="control-group mb-4" :class="[errors.has('district') ? 'has-error' : '']" v-if="person_type == 'company'">
            <input
                type="text"
                class="form-style control"
                name="district"
                v-validate="'required'"
                value="{{ old('district') }}"
                v-model="district"
                :data-vv-as="&quot;{{ __('State Register') }}&quot;" :readonly="readOnlyStateRegistar" />

            <span class="control-error" v-if="errors.has('district')">
                @{{ errors.first('district') }}
            </span>
        </div>

        <div class="control-group mb-4" :class="[errors.has('number') ? 'has-error' : '']" v-if="person_type == 'company'">
            <input
                type="text"
                class="form-style control"
                name="number"
                v-validate="'required'"
                value="{{ old('number') }}"
                v-model="number"
                :data-vv-as="&quot;{{ __('State Register') }}&quot;" :readonly="readOnlyStateRegistar" />

            <span class="control-error" v-if="errors.has('number')">
                @{{ errors.first('number') }}
            </span>
        </div>
    </script>
@endpush






