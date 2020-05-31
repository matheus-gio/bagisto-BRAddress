<div class="control-group" :class="[errors.has('district') ? 'has-error' : '']">
    <label for="district" class="mandatory">{{ __('district') }}</label>
    <input type="text" class="control" name="district" value="{{ old('district') ?? $address->district}}" v-validate="'required'" data-vv-as="&quot;{{ __('district') }}&quot;">
    <span class="control-error" v-if="errors.has('district')">@{{ errors.first('district') }}</span>
</div>

<div class="control-group" :class="[errors.has('number') ? 'has-error' : '']">
    <label for="number" class="mandatory">{{ __('number') }}</label>
    <input type="text" class="control" name="number" value="{{ old('number') ?? $address->number }}" v-validate="'required|numeric'" data-vv-as="&quot;{{ __('number') }}&quot;">
    <span class="control-error" v-if="errors.has('number')">@{{ errors.first('number') }}</span>
</div>