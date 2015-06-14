<?php
/**
 * Image.php
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

use EasyWeChat\Media;

/**
 * Class Image
 *
 * @property string $media_id
 *
 * @package EasyWeChat\Server\Messages
 */
class Image extends AbstractMessage implements MessageInterface
{

    /**
     * Properties
     *
     * @var array
     */
    protected $properties = array('media_id');

    /**
     * 设置音乐消息封面图
     *
     * @param string $mediaId
     *
     * @return Image
     */
    public function media($mediaId)
    {
        $this->setAttribute('media_id', $mediaId);

        return $this;
    }

    /**
     * 生成主动消息数组
     *
     * @return array
     */
    public function toStaff()
    {
        return array(
                'image' => array(
                            'media_id' => $this->media_id,
                           ),
               );
    }

    /**
     * 生成回复消息数组
     *
     * @return array
     */
    public function toReply()
    {
        return array(
                'Image' => array(
                            'MediaId' => $this->media_id,
                           ),
               );
    }
}
