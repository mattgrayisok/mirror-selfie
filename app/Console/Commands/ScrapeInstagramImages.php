<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ScrapeInstagramImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'instagram:scrape';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Daemon task which regularly scrapes images from the Instagram website';

    private $sleepLength = 3;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        
        while (true) {
            $json = $this->getJSONFromInstagram('selfie');

            foreach ($this->getImageNodesFromJSON($json) as $image) {
                $id = $image->id;
                $url = $image->display_src;
                echo($url . "\n");
            }

            sleep($this->sleepLength);
        }
        
    }

    private function getJSONFromInstagram($tag)
    {

        $fullHTML = file_get_contents('https://www.instagram.com/explore/tags/'.$tag.'/');

        $startPosition = strpos($fullHTML, 'window._sharedData') + 21;

        $strippedStart = substr($fullHTML, $startPosition);

        $endPosition = strpos($strippedStart, '</script>') - 1;

        $justJSON = substr($strippedStart, 0, $endPosition);

        $parsed = json_decode($justJSON);
        
        return $parsed;

    }

    private function getImageNodesFromJSON($json)
    {

        return $json->entry_data->TagPage[0]->tag->media->nodes;

    }
}
