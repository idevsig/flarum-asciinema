# Asciinema Extension for Flarum

![License](https://img.shields.io/badge/License-Apache_2.0-blue.svg) [![Latest Stable Version](https://img.shields.io/packagist/v/idevsig/flarum-asciinema.svg)](https://packagist.org/packages/idevsig/flarum-asciinema)

A [Flarum](https://flarum.org/) extension. Add asciinema to Flarum.

### Usage

```bbcode
[asciinema id=5E5V7BWvQ34LqjqIhF9JIQI8a][/asciinema]
```

[![](https://asciinema.org/a/5E5V7BWvQ34LqjqIhF9JIQI8a.svg)](https://asciinema.org/a/5E5V7BWvQ34LqjqIhF9JIQI8a)

```bbcoce
[asciinema id=5E5V7BWvQ34LqjqIhF9JIQI8a][/asciinema]
```

| Option | Default Value | Type | Description |
|:---|:---|:---|:---|
`id` | | `alpha` or `int`| **Must be set**  |
| `start` | `0` | `int` | **start-at**. start the playback at a given time. |
| `auto` | `0` | `int` | **autoplay**. `0` or `1`. the playback should start automatically upon a page load. | 
| `loop` | `0` | `int` | `0` or `1`. enable looped playback. |
| `speed` | `1` | `int` | the playback speed. |
| `idle` | | | **idle-time-limit**. optimize away idle moments in a recording. |
| `poster` | | | display in player's terminal until the playback is started. i.e: `npt:1:23` |
| `theme` | | `string` | asciinema dracula monokai nord solarized-dark solarized-light tango
| `cols` | | `int` | override player's terminal width. |
| `rows` | | `int` | override player's terminal height. |
| `preload` | `0` | `int`| `0` or `1`. the player should start fetching the recording immediately upon a page load, before a viewer starts the playback. |

- [Document](https://docs.asciinema.org/manual/server/embedding/#inline-player)

### Installation

```sh
composer require idevsig/flarum-asciinema
```

### Updating

```sh
composer update idevsig/flarum-asciinema
php flarum cache:clear
```

### Links

- [Packagist](https://packagist.org/packages/idevsig/flarum-asciinema)
- [GitHub](https://github.com/idevsig/flarum-asciinema)
- [Discuss](https://discuss.flarum.org/d/36898)