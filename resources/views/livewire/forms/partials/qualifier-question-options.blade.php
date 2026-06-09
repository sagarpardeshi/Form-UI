<?php

use Livewire\Volt\Component;

new class extends Component {

    public array $options = [];

    public ?int $correctAnswer = null;

    public function mount()
    {
        $this->options = [
            ['text' => '', 'score' => '']
        ];
    }

    public function addOption()
    {
        $this->options[] = [
            'text' => '',
            'score' => '',
        ];
    }

    public function removeOption($index)
    {
        unset($this->options[$index]);
        $this->options = array_values($this->options);
    }
};

?>

<div>

    <label class="form-label mb-3 h2">Options</label>

    @foreach($options as $index => $option)

        <div class="row align-items-center g-2 mb-3">

            <div class="col-md-8">
                <div class="input-group">

                    <span class="input-group-text">
                        <input class="form-check-input m-0" type="radio" name="radio" wire:model.live="correctAnswer"
                            value="{{ $index }}">
                    </span>

                    <input type="text" class="form-control" placeholder="Option {{ $index + 1 }}"
                        wire:model.live="options.{{ $index }}.text">

                </div>
            </div>

            <div class="col-md-3">
                <input type="number" class="form-control" placeholder="Score" wire:model.live="options.{{ $index }}.score">
            </div>

            <div class="col-md-1 text-center">

                @if(count($options) > 1)
                    <button type="button" class="btn btn-icon rounded-circle p-2" wire:click="removeOption({{ $index }})">
                        <i class="icon las la-trash"></i>
                    </button>
                @endif

            </div>

        </div>

    @endforeach

    <a href="#" wire:click.prevent="addOption" class="ms-1 small">
        Add more
    </a>

</div>