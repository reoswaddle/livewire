<div class="card" style="width: 26rem; margin-top:30px">
    <div class="card-body">
        <h2>Create Contact </h2>
        <form wire:submit.prevent="createContact">
            <div class="form-group mb-2">
                <label for="name">Name</label>
                <input wire:model="name" class="form-control" id="name" />
            </div>
            <div class="form-group mb-2">
                <label for="email">Email</label>
                <input wire:model="email" class="form-control" id="email" />
            </div>
            <div class="form-group mb-2">
                <label for="phone">Phone</label>
                <input wire:model="phone" class="form-control" id="phone" />
            </div>
            <div class="form-group mb-2">
                <label for="address1">Address Line 1</label>
                <input wire:model="addressLine1" class="form-control" id="address1" />
            </div>
            <div class="form-group mb-2">
                <label for="address2">Address Line 2</label>
                <input wire:model="addressLine2" class="form-control" id="address2" />
            </div>
            <div class="form-group mb-2">
                <label for="city">City</label>
                <input wire:model="city" class="form-control" id="city" />
            </div>
            <div class="form-group mb-2">

                <label for="city">County</label>
                <select wire:model="county" class="form-control" id="county">
                    <option> Cornwall </option>
                    <option> Devon </option>
                    <option> Dorset </option>
                    <option> Hampshire </option>
                    <option> Somerset </option>
                </select>
            </div>
            <div class="form-group mb-2">
                <label for="postcode">Postcode</label>
                <input wire:model="postcode" class="form-control" id="postcode" />
            </div>
            <div class="form-group mb-2 form-check">
                <label for="marketingOpt">Opt In Marketing</label>
                <input wire:model="marketingOptIn" type="checkbox" class="form-check-input" id="marketingOpt"  />
            </div>
            <div class="form-group mb-2">
                <label for="marketingPref">Opt In Marketing</label>
                <select wire:model="contactPreferences" class="form-control" id="marketingPref" multiple>
                    <option> sms </option>
                    <option> email </option>
                    <option> post </option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
