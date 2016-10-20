# pico-md_linkexternal
Pico Plugin:リンクタイトルの冒頭に、ex:と書いたリンクを、外部リンクとみなし、rel="external"属性とtarget="_blank"を追加するプラグインです。

# Markdown追加記法

```markdown
    [ex:リンクタイトル](リンクURL)
```
ex).

```html
    [ex:おんぷ村](http://onpu-tamago.net/)
    → <a href="http://onpu-tamago.net/" rel="external" target="_blank">おんぷ村</a>
```
