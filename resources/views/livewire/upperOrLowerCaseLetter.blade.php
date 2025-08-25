<?php

use function Livewire\Volt\{state, mount};

state(['word']);

mount(function () {
    if (ctype_upper($this->word)) {
        $this->word = strtolower($this->word);
    } else {
        $this->word = strtoupper($this->word);
    }
});

?>

<div>
    <p>{{ $this->word }}</p>
</div>
