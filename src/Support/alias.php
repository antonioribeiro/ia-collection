<?php

$aliases = [
    Illuminate\Support\Collection::class => IlluminateAgnostic\Collection\Support\Collection::class,
    Illuminate\Support\Arr::class => IlluminateAgnostic\Collection\Support\Arr::class,
    Illuminate\Support\Carbon::class => IlluminateAgnostic\Collection\Support\Carbon::class,
    Illuminate\Support\HigherOrderCollectionProxy::class => IlluminateAgnostic\Collection\Support\HigherOrderCollectionProxy::class,
    Illuminate\Support\HigherOrderTapProxy::class => IlluminateAgnostic\Collection\Support\HigherOrderTapProxy::class,
    Illuminate\Support\HtmlString::class => IlluminateAgnostic\Collection\Support\HtmlString::class,
    Illuminate\Support\Optional::class => IlluminateAgnostic\Collection\Support\Optional::class,
    Illuminate\Support\Str::class => IlluminateAgnostic\Collection\Support\Str::class,
    Illuminate\Support\Debug\Dumper::class => IlluminateAgnostic\Collection\Support\Debug\Dumper::class,
    Illuminate\Support\Debug\HtmlDumper::class => IlluminateAgnostic\Collection\Support\Debug\HtmlDumper::class,
    Illuminate\Support\Enumerable::class => IlluminateAgnostic\Collection\Support\Enumerable::class,
    Illuminate\Support\LazyCollection::class => IlluminateAgnostic\Collection\Support\LazyCollection::class,
];

foreach ($aliases as $illuminate => $tighten) {
    if (class_exists($illuminate) && ! interface_exists($illuminate) && ! trait_exists($illuminate)) {
        class_alias($illuminate, $tighten);
    }
}
