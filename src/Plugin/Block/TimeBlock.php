<?php

namespace Drupal\time_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a block called "Your Time Block".
 *
 * @Block(
 *  id = "time_block_time",
 *  admin_label = @Translation("Your Time Now")
 * )
 */
class TimeBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
public function build() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('<script type="text/javascript">
now = new Date();
localtime = now.toString();
utctime = now.toGMTString();
document.write("<p><center><strong>Local time:</strong></center><br/> " + localtime +
"</p>");
document.write("<p><center><strong>UTC time:</strong></center><br/> " + utctime +
"</p>");
</script>'),
    ];
     }
}
