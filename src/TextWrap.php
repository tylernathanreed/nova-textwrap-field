<?php

namespace Reedware\NovaTextWrapField;

use Laravel\Nova\Fields\Textarea;

class TextWrap extends Textarea
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'text-wrap';

    /**
     * Indicates if the element should be shown on the index view.
     *
     * @var bool
     */
    public $showOnIndex = true;

    /**
     * Display the field as raw HTML using Vue.
     *
     * @return $this
     */
    public function asHtml()
    {
        return $this->withMeta(['asHtml' => true]);
    }

    /**
     * Display the field as markdown using Vue.
     *
     * @return $this
     */
    public function asMarkdown()
    {
        return $this->withMeta(['asMarkdown' => true]);
    }
}
