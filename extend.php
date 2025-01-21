<?php

namespace Idevsig\AsciinemaEmbed;

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

// data-start-at="0"
// data-autoplay="0"
// data-loop="0" 
// data-speed="1" 
// data-idle-time-limit="" 
// data-poster="npt:1:23"
// data-theme="monokai" // asciinema dracula monokai nord solarized-dark solarized-light tango

// data-cols="2"
// data-rows="2"
// data-preload="true"

return [
    (new Extend\Formatter)
        ->configure(function (Configurator $configurator) {
            $bbcode = $configurator->BBCodes->add('asciinema');
            $tag    = $configurator->tags->add('asciinema');
            $tag->template = '<script src="https://asciinema.org/a/{@id}.js" ' .
                'id="asciicast-{@id}" ' .
                'data-start-at="{@start}" ' .
                'data-autoplay="{@auto}" ' .
                'data-loop="{@loop}" ' .
                'data-speed="{@speed}" ' .
                'data-idle-time-limit="{@idle}" ' .
                'data-poster="{@poster}" ' .
                'data-theme="{@theme}" ' .
                'data-cols="{@cols}" ' .
                'data-rows="{@rows}" ' .
                'data-preload="{@preload}" ' .
                'async></script>';
        
            $attribute = $tag->attributes->add('id');
            $attribute->filterChain->append('#alnum');
            $attribute->required = true;
            
            $attribute = $tag->attributes->add('start');
            $attribute->filterChain->append('#uint');
            $attribute->defaultValue = 0;

            $attribute = $tag->attributes->add('auto');
            $attribute->filterChain->append('#choice')->setValues([0, 1]);
            $attribute->defaultValue = 0;

            $attribute = $tag->attributes->add('loop')->setValues([0, 1]);
            $attribute->filterChain->append('#uint');
            $attribute->defaultValue = 0;

            $attribute = $tag->attributes->add('speed');
            $attribute->filterChain->append('#uint');
            $attribute->defaultValue = 1;
        
            $attribute = $tag->attributes->add('idle');
            $attribute->defaultValue = '';

            $attribute = $tag->attributes->add('theme');
            $attribute->filterChain->append('#choice')->setValues([
                'asciinema',
                'dracula',
                'monokai',
                'nord',
                'solarized-dark',
                'solarized-light',
                'tango',
                '',
            ]);
            $attribute->defaultValue = '';

            $attribute = $tag->attributes->add('poster');
            $attribute->defaultValue = '';
        
            $attribute = $tag->attributes->add('cols');
            $attribute->filterChain->append('#uint');
            $attribute->defaultValue = 0;
        
            $attribute = $tag->attributes->add('rows');
            $attribute->filterChain->append('#uint');
            $attribute->defaultValue = 0;
        
            $attribute = $tag->attributes->add('preload');
            $attribute->filterChain->append('#choice')->setValues([0, 1]);
            $attribute->defaultValue = 0;
    }),
];
