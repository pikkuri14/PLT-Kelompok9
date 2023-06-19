<div>
    {{
        $title
    }}.{{
        $body
    }}.
    <div class="color bg-dark p-2">
        <div class="col-sm-8">
            <x-adminlte-textarea wire:model="title" name="taBasic" placeholder="Please type the announcement body"/>
        </div>
        <div class="col-sm-8">
            <x-adminlte-textarea wire:model="body" name="taBasic" placeholder="Please type the announcement body"/>
        </div>
        <x-adminlte-button wire:click="save({{ $title, $body }})" class="btn-sm" label="Submit" theme="success" icon="fas fa-save"/>
    </div>

    
</div>
