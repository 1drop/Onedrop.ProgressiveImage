# Onedrop.ProgressiveImage

This package overrides the default behavior of the `ImageThumbnailGenerator` of `Neos.Media` to 
always generate progressive images (interlace plane).


## Compatibility

| Neos Version     | Onedrop.ProgressiveImage Version  |
|------------------|-----------------------------------|
| Neos 4.x         | 3.x                               |
| Neos 3.x         | 2.x                               |
| Neos 2.3 LTS     | 1.x                               |

## How-To:

### Install: 

Use the command ``composer require onedrop/progressiveimage`` to add this package as a 
requirement to your Flow/Neos project. 

Run ``flow media:clearthumbnails`` to re-generate existing images progressively.
