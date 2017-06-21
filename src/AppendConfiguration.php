<?php

namespace NuvoleWeb\Robo\Task\Config;

/**
 * Class AppendConfiguration.
 *
 * @package NuvoleWeb\Robo\Task\Config
 */
class AppendConfiguration extends BaseConfiguration {

  /**
   * {@inheritdoc}
   */
  public function process($content) {
    return $this->sanitizeContent($content) . $this->getConfigurationBlock();
  }

}
