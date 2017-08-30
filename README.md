# PGA PHP Client


add the code bellow at __php.ini__ to run XDebug to debug PHP:

[Xdebug]
zend_extension="/usr/lib/php/20151012/xdebug.so"
xdebug.remote_enable = 1
xdebug.remote_port = 9000
xdebug.idekey = PHPSTORM
xdebug.max_nesting_level = 512
xdebug.file_link_format = phpstorm://open?%f:%l