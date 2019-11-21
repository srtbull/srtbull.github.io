<?php
/*
* This is a config file for Rust-Server-Website-Template
* Created by Kirill Krasin (https://github.com/Mo45/)
* Latest versions - https://github.com/Mo45/Rust-Server-Website-Template
*/
	define( "VERSION","2.2" );
	define( "CSS_VER","280819" );
	define( "DEV_MODE","OFF" );

//======================================================================
// Global Site Config
//======================================================================

	define( "SITE_URL" , "www.primalrust.com" );
	# Your website URL

	define( "SRV_NAME" , "Primal Rust Servers" );
    # Server or project name, will be used as title

    define( "SRV_SLOGAN" , "Rust - The way it was meant to be!" );
    # Server or project slogan, will be used as slogan and description

    define( "SRV_TWITTER" , "srtbull" );
    # Your server twitter username without @ (will be used in twitter meta tags and social links)

	define( "CACHE_LIFETIME" , "300" );
	# How often the cache is cleared (in seconds), set to "0" to disable caching

	define( "CONF_BGVID" , "ON" );
    # Fullscreen background video, change it to "OFF", if you want only image

//======================================================================
// Modules Config | By default all modules is enabled
//======================================================================
	define( "MODULE_SERVERS_V2" , "ON" );
	# Server status module RUST-SERVERS.NET API, ON/OFF

	define( "MODULE_SERVERS" , "OFF" );
	# Server status module RUST-SERVERS.INFO API, ON/OFF

	define( "MODULE_COMMUNITY" , "OFF" );
	# Steam Group module, ON/OFF

	define( "MODULE_DISCORD" , "ON" );
    # Discord Server module, ON/OFF

    define( "DISCORD_SERVER_ID" , "491797721737461761" );
    # Discord Server ID, Discord App -> Your Server -> Server Settings -> Widget -> Server ID

    define( "DISCORD_INVITE_LINK" , "https://discord.gg/5Bk44ym" );
    # Discord Server Invite Link, Discord App -> Your Server -> Server Settings -> Invites -> Create One (Set this link to never expire)

	/* How to find Steam Group ID 64 - https://support.multiplay.co.uk/support/solutions/articles/1000202859 */
    define( "STEAM_GID" , "103582791435542737" );
	# Your Steam Group ID64

	define( "MODULE_STORE" , "ON" );
	# External store module, ON/OFF

	define( "MODULE_PRICING" , "ON" );
	# Pricing Table, ON/OFF

	define( "STORE_URL" , "https://www.sdonate.com/stores/primalrust/index.php" );
	# URL to your store

	define( "MODULE_FAQ" , "ON" );
	# FAQ, ON/OFF

	define( "MODULE_RULES" , "ON" );
	# Rules module, ON/OFF - Add or edit rules by edit this file --> /modules/rules.php <--

	define( "MODULE_SOCIAL" , "ON" );
    # Social module, ON/OFF

	define( "MODULE_STAFF" , "ON" );
	# Staff module, ON/OFF - Add or edit your staff members by edit this file --> /modules/staff.php <--

	define( "MODULE_CONTACT" , "ON" );
    # Contact module, ON/OFF - Add or edit template by edit this file --> /modules/contact.php <--

//======================================================================
// Social Links
//======================================================================

	define( "SRV_FACEBOOK" , "https://www.facebook.com/srtbull" );
	# Facebook Page link, leave blank to remove from page

	define( "SRV_VK" , "" );
	# VK.com Page Link, leave blank to remove from page

//======================================================================
// Server Status Module V2 Config (rust-servers.net)
//======================================================================

//-----------------------------------------------------
// Server #1
//-----------------------------------------------------

	define( "SERVER_1_KEY","IFvu9MlmkT2xDWZvsGUfMX6iJ6LPxRlEHAP" ); // REQUIRED
	# Your server #1 API Key (Rust-Servers.Net)
	define( "SERVER_1_DESC" , "Primal Instinct | No Playing Admins" );
	# Your server #1 description

//-----------------------------------------------------
// Server #2
//-----------------------------------------------------

	define( "SERVER_2_KEY","sl0zjtbEsyg0iSRQ1HVKWITiOhLHEjqMKW" ); // REQUIRED
	# Your server #2 API Key (Rust-Servers.Net)
	define( "SERVER_2_DESC" , "Primal Unlimited | 2x gather | Custom Plugins" );
	# Your server #2 description

// Extra servers

//======================================================================
// Server Status Module Config (rust-servers.info)
//======================================================================

//-----------------------------------------------------
// Server #1
//-----------------------------------------------------

	define( "SRV_ID_1","3" );
	# Your server #1 ID (Rust-Servers.Info)
	define( "SRV_1_DESC" , "This is short server description. Vanilla, Cool admins, etc." );
	# Your server #1 description

//-----------------------------------------------------
// Server #2
//-----------------------------------------------------

	define( "SRV_ID_2","2" );
	# Your server #2 ID (Rust-Servers.Info)
	define( "SRV_2_DESC" , "This is short server description. Vanilla, Cool admins, etc." );
	# Your server #2 description

// Extra servers

?>
