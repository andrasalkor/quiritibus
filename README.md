# Quiritibus Plugin

This repository is storing the custom plugin developed for the Quiritibus Latin Magazine website, currently being developed at: https://quiritibus.andrasalkor.com/

> Disclaimer: The documentation of this plugin is English at the moment, but I might go for Latin later down the line, just for the fun of it.

## Contents

```
quiritibus-plugin/
├─ inc/
│  ├─ categories.php
│  ├─ patterns.php
├─ index.php
├─ quiritibus-plugin.php
```

## What does it do?

This WordPress plugin is intended to host every custom feature Quiritibus needs beyond already existing plugins on the website. So far, it only adds a new block pattern to WordPress's default Gutenberg editor, to make the work of the magazine's editors easier.

The pattern itself uses [PublishPress Blocks][https://publishpress.com] to function, and is specifically building on the Advanced Tabs block by defining four tabs instead of the default three, and giving appropriate names, Antiqua manu, Italica manu, Nova manu, Acadēmicā manū, instead of the default Tab 1, Tab 2, Tab 3 the user would normally be provided with upon the generation of the block.

The user can then make four versions of the same Latin text externally (so far?), and paste them in the appropriate tab.

![](D:\Alkor\Latina\Quiritibus\quiritibus-git\images\advanced_tabs_block_pattern.png)

## Installation

Coming soon...
