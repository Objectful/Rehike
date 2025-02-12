<?php
namespace Rehike\Controller\core;

use Rehike\Model\Appbar\MAppbar as Appbar;
use SpfPhp\SpfPhp;
use Rehike\Model\Footer\MFooter as Footer;

/**
 * Defines a general YouTube Nirvana controller.
 * 
 * This implements the base API and data used to render a Nirvana (Appbar)
 * page.
 * 
 * @author Taniko Yamamoto <kirasicecreamm@gmail.com>
 * @author Aubrey Pankow <aubyomori@gmail.com>
 * @author Daylin Cooper <dcoop2004@gmail.com>
 */
abstract class NirvanaController extends HitchhikerController
{
    /**
     * Don't request the guide on initial visit.
     * 
     * This should be true on pages like watch, where the guide
     * isn't open by default.
     * 
     * @var bool
     */
    protected $delayLoadGuide = false;

    /** @inheritdoc */
    protected $spfIdListeners = [
        '@body<class>',
        'player-unavailable<class>',
        'debug',
        'early-body',
        'appbar-content<class>',
        'alerts',
        'content',
        '@page<class>',
        'header',
        'ticker-content',
        'player-playlist<class>',
        '@player<class>'
    ];

    /** @inheritdoc */
    protected function init(&$yt, &$template)
    {
        $yt->spfEnabled = true;
        $yt->useModularCore = true;
        $yt->modularCoreModules = [];
        $yt->appbar = new Appbar();
        $yt->page = (object)[];

        $yt -> footer = new Footer();

        // Request appbar guide fragments if the page has the
        // guide enabled, the request is not SPF, and the guide
        // is open by default.
        if (SpfPhp::isSpfRequested() || !$this->delayLoadGuide)
        {
            $yt->appbar->addGuide($this->getPageGuide());
        }
    }

    /**
     * Define the page to use a JS page module.
     * 
     * @param string $module  Name of the module (not URL)
     * 
     * @return void
     */
    protected function useJsModule($module)
    {
        $this->yt->modularCoreModules[] = $module;
    }
}