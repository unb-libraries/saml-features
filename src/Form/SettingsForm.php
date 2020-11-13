<?php
/**
 * @file
 * Contains Drupal\saml_features\Form\SettingsForm.
 */
namespace Drupal\saml_features\Form;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class SettingsForm extends ConfigFormBase {
  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'saml_features.adminsettings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'saml_features_settings_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('saml_features.adminsettings');

    $form['exclude_stu'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Exclude <strong>STU</strong> reference from SAML messaging text'),
      '#default_value' => $config->get('exclude_stu'),
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);

    $this->config('saml_features.adminsettings')
      ->set('exclude_stu', $form_state->getValue('exclude_stu'))
      ->save();
  }

}