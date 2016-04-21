<?php

namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\Validation\Factory 
 * @method static \Illuminate\Validation\Validator make(array $data, array $rules, array $messages = [], array $customAttributes = [])
 * @method static void validate(array $data, array $rules, array $messages = [], array $customAttributes = [])
 * @method static void extend($rule, $extension, $message = null)
 * @method static void extendImplicit($rule, $extension, $message = null)
 * @method static void replacer($rule, $replacer)
 * @method static void resolver(\Closure $resolver)
 * @method static \Symfony\Component\Translation\TranslatorInterface getTranslator()
 * @method static \Illuminate\Validation\PresenceVerifierInterface getPresenceVerifier()
 * @method static void setPresenceVerifier(\Illuminate\Validation\PresenceVerifierInterface $presenceVerifier)
 */
class Validator extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'validator';
    }
}
