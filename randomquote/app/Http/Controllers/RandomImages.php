<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class RandomImages extends BaseController
{
    public static $images = array(
            "https://huellitastopicoslaravel.s3.amazonaws.com/memes/04prb3mdwqd41.jpg",
            "https://huellitastopicoslaravel.s3.amazonaws.com/memes/121.JPG",
            "https://huellitastopicoslaravel.s3.amazonaws.com/memes/169151535_3881316295286171_640653382887545006_n.jpg",
            "https://huellitastopicoslaravel.s3.amazonaws.com/memes/183924090_1707835332735093_7437035231628149706_n.jpg",
            "https://huellitastopicoslaravel.s3.amazonaws.com/memes/183963251_1708378079347485_9140700650451043608_n.jpg",
            "https://huellitastopicoslaravel.s3.amazonaws.com/memes/22dbb98cb18b0e47c34b0a6bfdbcd78b.jpg",
            "https://huellitastopicoslaravel.s3.amazonaws.com/memes/687474703a2f2f692e696d6775722e636f6d2f474a6c594438332e6a7067.jpg",
            "https://huellitastopicoslaravel.s3.amazonaws.com/memes/DgsXLk_X4AEKiJJ.jpg",
            "https://huellitastopicoslaravel.s3.amazonaws.com/memes/FDGDFGDFGDFG.JPG",
            "https://huellitastopicoslaravel.s3.amazonaws.com/memes/FSDFSDFSDF.JPG",
            "https://huellitastopicoslaravel.s3.amazonaws.com/memes/HFGHFGHFGHFGH.JPG",
            "https://huellitastopicoslaravel.s3.amazonaws.com/memes/images.jpg",
            "https://huellitastopicoslaravel.s3.amazonaws.com/memes/SDFSDFSDF.JPG",
            "https://huellitastopicoslaravel.s3.amazonaws.com/memes/thumb_tomasz-łakomy-push-force-tlakomy-ouerv-is-this-docker-11-40-64452456.png",
            "https://huellitastopicoslaravel.s3.amazonaws.com/memes/what-are-your-superpowers-again-php-7-1-2-php-superpowers-25589826.png",
    );

    public function show()
    {
        $data = []; // To send to the view
        $data["title"] = "Random Images";
        $totalImages = (count(RandomImages::$images));
        $randomNumber = (rand(0, ($totalImages - 1)));
        $randomImage = RandomImages::$images[$randomNumber];
        $data["url"] = $randomImage;
        $data["server_ip"] = gethostbyname(gethostname());
        return view('randomImages')->with("data", $data);
    }
}
