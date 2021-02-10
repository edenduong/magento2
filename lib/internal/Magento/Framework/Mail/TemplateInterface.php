<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework\Mail;

/**
 * Mail Template interface
 *
 * @api
 * @since 100.0.2
 */
interface TemplateInterface
{
    /**
     * Types of template
     */
    const TYPE_TEXT = 1;

    const TYPE_HTML = 2;

    /**
     * Get processed template
     *
     * @return string
     */
    public function processTemplate();

    /**
     * Get processed subject
     *
     * @return string
     */
    public function getSubject();

    /**
     * Set template variables
     *
     * @param array $vars
     * @return $this
     */
    public function setVars(array $vars);

    /**
     * Set template options
     *
     * @param array $options
     * @return $this
     */
    public function setOptions(array $options);

    /**
     * Return true if template type eq text
     *
     * @return boolean
     */
    public function isPlain();

    /**
     * Getter for template type
     *
     * @return int
     */
    public function getType();
}
