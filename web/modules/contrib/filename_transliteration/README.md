# Filename Transliteration

A Drupal 8 helper module to enable basic transliteration for all uploaded
File Entities.

Filename sanitization includes:

* *Transliteration* - Special characters are converted from UTF8 to ASCII using
  Drupal core's [PhpTransliteration::transliterate][1] functionality.
* *Downcasing* - Capital letters are lowercased.
* *Underscores as separators* - Anything that is not a valid filename character
  (including the space character) is replaced with an underscore.
* *Reduce duplicate separators* - Sequences of underscores, dashes, and periods
  are simplified to a single character.

*Note:* Sanitization only impacts new file uploads; all files already uploaded
to a site are not affected.

## Why does this module exist?

Transliteration functionality was ported into Drupal 8 core, but there is
currently no support for filename transliteration. Eventually this module
will become obsolete when this gets fixed in core. Follow [#3238461][3] and
[#2492171][4] for progress.

## Configuration

The module currently has no configuration or UI. Feature requests and merge
requests welcome.

## Credits

This module is based on a now deleted blog post by [Aleksander Belov][2]
at Buzzwoo.de, simplified for a less specific use case.

[1]: https://api.drupal.org/api/function/PhpTransliteration::transliterate
[2]: https://www.drupal.org/u/aleksander-belov
[3]: https://www.drupal.org/i/3238461
[4]: https://www.drupal.org/i/2492171
