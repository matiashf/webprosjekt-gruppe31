<?php

function remote_addr_is_in_subnet() {
    $addr = ip2long($_SERVER["REMOTE_ADDR"]);
    foreach(func_get_args() as $cidr) {
	$parts = explode("/", $cidr);
	if ( ~( ip2long($parts[0]) ^ ( ~$addr ) ) >> ( 32 - $parts[1] ) == 0 ) {
	    return true;
        }
    }
    return false;
}

# We only allow deployment from github servers 
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    http_response_code(405);
    echo "Method Not Allowed";
} elseif ( remote_addr_is_in_subnet("204.232.175.64/27", "192.30.252.0/22") ) {
    shell_exec('sudo -u webprosjekt-gruppe31 ~webprosjekt-gruppe31/webprosjekt-gruppe31/deploy/deploy.sh 2>&1');
} else {
    http_response_code(403);
    echo "Forbidden";
}
