<?php
/**
 * NewsItem.php
 *
 * Part of EasyWeChat.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author    overtrue <i@overtrue.me>
 * @copyright 2015 overtrue <i@overtrue.me>
 * @link      https://github.com/overtrue
 * @link      http://overtrue.me
 */

namespace EasyWeChat\Server\Messages;

/**
 * Class NewsItem
 *
 * @package EasyWeChat\Server\Messages
 */
class NewsItem extends AbstractMessage implements MessageInterface
{

    /**
     * Properties
     *
     * @var array
     */
    protected $properties = array(
                             'title',
                             'description',
                             'pic_url',
                             'url',
                            );
}
