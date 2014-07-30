Genesis Awesome Theme
=====================

Genesis Child Theme for fans of SASS / Compass maintaining the same stylesheet that Genesis Sample Theme. 
This version add integration whit FontAwesome, Bootstrap Buttons and Alert Boxes, Shortcodes and Jquery.


### What's Include
- Most Popular Snippets (lib/functions/snippets.php) . Don't spell time looking for snippets on Genesis Documentation. Just uncomment for use it!!
- Developers Tools (/lib/dev-tools.php) Taken from [Bones for Genesis 2.0](https://github.com/cdukes/bones-for-genesis-2-0)
- FontAwesome 4.1.0
- Bootstrap 3.2.0 (Buttons and Alerts) 
- Animate.css
- Shortcodes (/lib/functions/shortcodes.php)

### Mixins
Rem Mixin

    You code:
    .class{
        @include rem(margin, 10px);
        @include rem(padding, 10px 20px);
    }
    You got:
    .class{
        margin: 10px;
        margin: 1rem;
        padding: 10px 20px;
        padding: 1rem 2rem;
    }


### Shortcodes

####Bootstrap Button
See: [Bootstrap Buttons](http://getbootstrap.com/css/#buttons)

[gat-btn color=$color size=$size url=$url target=$target]
- $color: default, primary, success, info, warning, danger, link
- $size: lg, sm, xs // Button Normal Size if is omitted
- $target: self or blank  // This is optional. Use "self" by default.
- $url: Url

Example:

    [gat-btn color=info size=lg target=blank url=twitter.com/CarlosLanto] Twitter [/gat-btn]
    
    [gat-btn color=success url=twitter.com/CarlosLanto] Twitter [/gat-btn]

#### Alert Boxes 

[gat-box color=$color]
- $color: default, primary, success (default), infom warning, danger

Example:

    [gat-box] Lorem ipsum dolor sit amet [/gat-box]
    
    [gat-box color=info] Lorem ipsum dolor sit amet [/gat-box]

#### Genesis Column Classes 

##### One Half

	[half first]Lorem ipsum dolor sit amet, consectetuer adipiscing elit.[end]

	[half]Lorem ipsum dolor sit amet, consectetuer adipiscing elit.[end]

##### One Third

	[third first]Lorem ipsum dolor sit amet, consectetuer adipiscing elit.[end]

	[third]Lorem ipsum dolor sit amet, consectetuer adipiscing elit.[end]

	[third]Lorem ipsum dolor sit amet, consectetuer adipiscing elit.[end]


### Changelog
- 0.2 (29 July, 2014)
    - Shortcodes for Bootstrap buttons and alert box
    - Shortcode For Genesis Column Classes
    - Add Rem Mixin 

- 0.1 (23 July, 2014)
	Start The proyect
