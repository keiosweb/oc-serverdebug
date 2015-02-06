Server Debug
--------------

**Link to company repo: http://gitlab.c-call.eu/october_plugins/serverdebug**

Server debug is a simple, quickly written plugin that adds "Server Debug" position to the main menu and allows you to see the webserver details, user agent details and provides a handy access to phpInfo and hhvmInfo. 

It can be very useful when debugging problems on various hostings.

You can find public GIT repository link attached. If you don't like anything in this plugin or have an idea of what we should add to this plugin, please use Support section, all suggestions are very welcome. 

We will be adding more features soon, so stay updated!

####Warning

If you use Multisite plugin from OctoberCMS Market, please do not use this repository. Voipdeploy brand is merging with Keios and this version of the plugin has all namespaces and table names replaced. As soon as our brand is upgraded in OctoberCMS Market, we will remove this notice.

####Server Debug Documentation

As this plugin is very simple, yet may be very useful, we will keep this documentation short.

#####Installation

You can either add plugin to your project and update october, or install it manually.

    cd october_project/plugins
    mkdir keios # if not exists
    cd keios
    git clone http://gitlab.c-call.eu/october_plugins/serverdebug.git
    cd ../..
    php artisan plugin:refresh keios.serverdebug

#####Features
+ Parameters

Useful information about the webserver and user agent.

+ phpInfo

Simple, full phpInfo() listing

+ hhvmInfo

When using HHVM, the phpinfo() will return "Hip Hop" only. We have added separate section for HHVM configuration listing.

+ Permissions

Enable or disable single pages or whole menu position using backend user permissions (a new tab will appear).
