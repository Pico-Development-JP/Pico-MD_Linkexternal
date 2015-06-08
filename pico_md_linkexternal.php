<?php
/**
 * Pico Markdown Extension: Link External
 * マークダウン拡張構文：リンクのタイトル冒頭に「ex:」と記載したリンクを外部リンクとみなしてexternal要素を付与
 *
 * @author TakamiChie
 * @link http://onpu-tamago.net/
 * @license http://opensource.org/licenses/MIT
 * @version 1.0
 */
class Pico_MD_LinkExternal {

	public function after_parse_content(&$content)
	{
  	$content = preg_replace('/<a(.*?)>ex:(.*?)<\/a>/', '<a$1 rel="external" target="_blank">$2</a>', $content);
	}

}

?>
