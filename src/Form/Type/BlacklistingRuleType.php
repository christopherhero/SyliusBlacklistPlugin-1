<?php

declare(strict_types=1);

namespace BitBag\SyliusBlacklistPlugin\Form\Type;

use Sylius\Bundle\ChannelBundle\Form\Type\ChannelChoiceType;
use Sylius\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

final class BlacklistingRuleType extends AbstractResourceType
{
    public function __construct(string $dataClass, array $validationGroups = [])
    {
        parent::__construct($dataClass, $validationGroups);
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'bitbag_sylius_blacklist_plugin.form.blacklisting_rule.name',
            ])
//            ->add('attributes', ChoiceType::class, [
//                'label' => 'bitbag_sylius_blacklist_plugin.form.blacklisting_rule.attribute',
//                'multiple' => true,
//                'choices' => ['customerId' => 'customerId', 'postcode' => 'postcode']
//            ])
            ->add('permittedStrikes', NumberType::class, [
                'label' => 'bitbag_sylius_blacklist_plugin.form.blacklisting_rule.permitted_strikes',
            ])
            ->add('channels', ChannelChoiceType::class, [
                'multiple' => true,
                'expanded' => true,
                'label' => 'bitbag_sylius_blacklist_plugin.form.blacklisting_rule.channels',
            ])
        ;
    }

    public function getBlockPrefix(): string
    {
        return 'bitbag_sylius_blacklist_plugin_blacklisting_rule';
    }
}
