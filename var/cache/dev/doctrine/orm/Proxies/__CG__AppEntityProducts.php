<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Products extends \App\Entity\Products implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'attachment' => [parent::class, 'attachment', null],
        "\0".parent::class."\0".'attachmentFile' => [parent::class, 'attachmentFile', null],
        "\0".parent::class."\0".'bestBeforeDateAt' => [parent::class, 'bestBeforeDateAt', null],
        "\0".parent::class."\0".'capacity' => [parent::class, 'capacity', null],
        "\0".parent::class."\0".'categories' => [parent::class, 'categories', null],
        "\0".parent::class."\0".'createdAt' => [parent::class, 'createdAt', null],
        "\0".parent::class."\0".'description' => [parent::class, 'description', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'images' => [parent::class, 'images', null],
        "\0".parent::class."\0".'isValid' => [parent::class, 'isValid', null],
        "\0".parent::class."\0".'name' => [parent::class, 'name', null],
        "\0".parent::class."\0".'ordersDetails' => [parent::class, 'ordersDetails', null],
        "\0".parent::class."\0".'price' => [parent::class, 'price', null],
        "\0".parent::class."\0".'slug' => [parent::class, 'slug', null],
        "\0".parent::class."\0".'stock' => [parent::class, 'stock', null],
        "\0".parent::class."\0".'updatedAt' => [parent::class, 'updatedAt', null],
        'attachment' => [parent::class, 'attachment', null],
        'attachmentFile' => [parent::class, 'attachmentFile', null],
        'bestBeforeDateAt' => [parent::class, 'bestBeforeDateAt', null],
        'capacity' => [parent::class, 'capacity', null],
        'categories' => [parent::class, 'categories', null],
        'createdAt' => [parent::class, 'createdAt', null],
        'description' => [parent::class, 'description', null],
        'id' => [parent::class, 'id', null],
        'images' => [parent::class, 'images', null],
        'isValid' => [parent::class, 'isValid', null],
        'name' => [parent::class, 'name', null],
        'ordersDetails' => [parent::class, 'ordersDetails', null],
        'price' => [parent::class, 'price', null],
        'slug' => [parent::class, 'slug', null],
        'stock' => [parent::class, 'stock', null],
        'updatedAt' => [parent::class, 'updatedAt', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
