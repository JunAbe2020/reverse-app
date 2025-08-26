<?php

use function Livewire\Volt\{state, mount};

state([
    'word' => '',
    'letters' => [],
    'result' => [],
]);

mount(function () {
    $word = (string) ($this->word ?? '');
    $this->letters = str_split($word);
    foreach ($this->letters as $letter) {
        if (ctype_alpha($letter)) {
            $this->result[] = ctype_upper($letter) ? strtolower($letter) : strtoupper($letter);
        } else {
            $this->result[] = $letter;
        }
    }
});

?>

<div>
    <p>{{ implode($this->result) }}</p>
</div>
