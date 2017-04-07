<?php
namespace Onedrop\ProgressiveImage\Domain\Model\Adjustment;

use Neos\Flow\Annotations as Flow;
use Imagine\Image\ImageInterface;
use Neos\Media\Domain\Model\Adjustment\AbstractImageAdjustment;

/**
 * An adjustment for quality of an image
 *
 * @Flow\Entity
 */
class ProgressiveImageAdjustment extends AbstractImageAdjustment
{
    /**
     * @var int
     */
    protected $position = 40;

    /**
     * Applies this adjustment to the given Imagine Image object
     *
     * @param  ImageInterface $image
     * @return ImageInterface
     */
    public function applyToImage(ImageInterface $image)
    {
        return $image->interlace(ImageInterface::INTERLACE_PLANE);
    }

    /**
     * Check if this Adjustment can or should be applied to its ImageVariant.
     *
     * @param  ImageInterface $image
     * @return bool
     */
    public function canBeApplied(ImageInterface $image)
    {
        return true;
    }
}
