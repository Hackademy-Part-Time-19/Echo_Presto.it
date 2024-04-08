<div>
    <div style="margin: 10px">
        <input style="width:50px" type="number" wire:model.live="quantity" min="1">
    <button class="btn btn primary" style="background: #2414da; width:max-content; border-radius:10px;color:white; margin-left:15px" type="button" wire:click.live="updateQuantity">{{ __('ui.update') }}</button>
    </div>
    
</div>
