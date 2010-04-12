--TEST--
Test for Services_GeoNames::wikipediaBoundingBox() method.
--FILE--
<?php
require_once dirname(__FILE__) . '/setup.php';

$geo = Services_GeoNames_factory(substr(basename(__FILE__), 0, -4));
try {
    $ret = $geo->wikipediaBoundingBox(array(
        'north' => 44.1,
        'south' => -9.9,
        'east'  => -22.4,
        'west'  => 55.2
    ));
    print_r($ret);
} catch (Services_GeoNames_Exception $exc) {
    echo $exc->getMessage();
}
?>
--EXPECTF--
Array
(
    [0] => stdClass Object
        (
            [summary] => Chongqing (; Postal map spelling: ''Chungking''; Wade-Giles: ''Ch'ung-ch'ing'') is the largest and most populous of the People's Republic of China's four provincial-level municipalities, and the only one in the less densely populated western half of China. Formerly (until 14 March 1997) a provincial city within Sichuan Province, the municipality of Chongqing has a registered population of (...)
            [title] => Chongqing
            [wikipediaUrl] => en.wikipedia.org/wiki/Chongqing
            [elevation] => 0
            [countryCode] => CN
            [lng] => %s
            [feature] => city
            [thumbnailImg] => http://www.geonames.org/img/wikipedia/60000/thumb-59536-100.jpg
            [lang] => en
            [lat] => %s
            [population] => 31823239
        )

    [1] => stdClass Object
        (
            [summary] => Mumbai (Marathi: ', n state of Maharashtra. With an estimated population of about 13 million, it is the largest metropolis in India and the most populous city in the world. With a population of 19 million, Mumbai Metropolitan Area that includes cities of Navi Mumbai & Thane is also the world's 5th most populated metropolitan area (...)
            [title] => Mumbai
            [wikipediaUrl] => en.wikipedia.org/wiki/Mumbai
            [elevation] => 0
            [countryCode] => IN
            [lng] => %s
            [feature] => city
            [thumbnailImg] => http://www.geonames.org/img/wikipedia/36000/thumb-35101-100.jpg
            [lang] => en
            [lat] => %s
            [population] => 12692717
        )

    [2] => stdClass Object
        (
            [summary] => Shanghai (Traditional and Simplified Chinese: ; Hanyu pinyin: Shànghǎi; Shanghainese: /zɑ̃'he/; abbreviation: ), situated on the banks of the Yangtze River Delta in East China, is the largest city of the People's Republic of China and the tenth largest in the world. Widely regarded as the citadel of China's modern economy, the city also serves as one of the nation's most important (...)
            [title] => Shanghai
            [wikipediaUrl] => en.wikipedia.org/wiki/Shanghai
            [elevation] => 0
            [countryCode] => CN
            [lng] => %s
            [feature] => city
            [thumbnailImg] => http://www.geonames.org/img/wikipedia/29000/thumb-28777-100.jpg
            [lang] => en
            [lat] => %s
            [population] => 13355925
        )

    [3] => stdClass Object
        (
            [summary] => Mexico City (in Spanish: Ciudad de México, México, D.F. or simply México) is the capital city of Mexico. It is the most important economic, industrial and cultural center in the country, and the most populous city with 8,720,916 inhabitants in 2005. Greater Mexico City (''Zona Metropolitana del Valle de México'') incorporates 58 adjacent municipalities of the State (...)
            [title] => Mexico City
            [wikipediaUrl] => en.wikipedia.org/wiki/Mexico_City
            [elevation] => 0
            [countryCode] => MX
            [lng] => %s
            [feature] => city
            [thumbnailImg] => http://www.geonames.org/img/wikipedia/100000/thumb-99165-100.jpg
            [lang] => en
            [lat] => %s
            [population] => 8657045
        )

    [4] => stdClass Object
        (
            [summary] => New York City (pronounced /nʲuːˈjɔɹk/) (officially The City of New York) is the largest city in the United States, with its metropolitan area ranking among the largest urban areas in the world. For more than a century, it has been one of the world's major centers of commerce and finance (...)
            [title] => New York City
            [wikipediaUrl] => en.wikipedia.org/wiki/New_York_City
            [elevation] => 0
            [countryCode] => US
            [lng] => %s
            [feature] => city
            [thumbnailImg] => http://www.geonames.org/img/wikipedia/156000/thumb-155265-100.jpg
            [lang] => en
            [lat] => %s
            [population] => 8108080
        )

    [5] => stdClass Object
        (
            [summary] => This is the list of schools of the Dallas Independent School District. For more information on the District, see the main article: Dallas Independent School (...)
            [title] => List of schools of the Dallas Independent School District
            [wikipediaUrl] => en.wikipedia.org/wiki/List_of_schools_of_the_Dallas_Independent_School_District
            [elevation] => 0
            [countryCode] =>   
            [lng] => %s
            [feature] => 
            [lang] => en
            [lat] => %s
            [population] => 0
        )

    [6] => stdClass Object
        (
            [summary] => in Lycoming County.  (...)
            [title] => History of Lycoming County, Pennsylvania
            [wikipediaUrl] => en.wikipedia.org/wiki/History_of_Lycoming_County%2C_Pennsylvania
            [elevation] => 0
            [countryCode] =>   
            [lng] => %s
            [feature] => city
            [lang] => en
            [lat] => %s
            [population] => 0
        )

    [7] => stdClass Object
        (
            [summary] => Seoul (서울)  is the capital of South Korea and is located on the basin of the Han River in the country's northwest. The city is situated about 50 km (~30 mi) south of the North Korean border, also known as the de-militarized zone (DMZ). Seoul is a city with ancient history, the area of Seoul appears in history as early as 18 BC, when the kingdom of Baekje founded its capital, (...)
            [title] => Seoul
            [wikipediaUrl] => en.wikipedia.org/wiki/Seoul
            [elevation] => 0
            [countryCode] => KO
            [lng] => %s
            [feature] => city
            [thumbnailImg] => http://www.geonames.org/img/wikipedia/99000/thumb-98869-100.jpg
            [lang] => en
            [lat] => %s
            [population] => 10349291
        )

    [8] => stdClass Object
        (
            [summary] => The University of Virginia (also called U.Va., UVA, Mr. Jefferson's University, or The UniversityMany universities' students and alumni refer to their respective institutions as "the university" for short. At the University of Virginia, this title is capitalized as a proper noun (i.e., "The University" or "the University")[http://www.hrs.virginia (...)
            [title] => University of Virginia
            [wikipediaUrl] => en.wikipedia.org/wiki/University_of_Virginia
            [elevation] => 0
            [countryCode] => US
            [lng] => %s
            [feature] => landmark
            [thumbnailImg] => http://www.geonames.org/img/wikipedia/147000/thumb-146909-100.jpg
            [lang] => en
            [lat] => %s
            [population] => 0
        )

    [9] => stdClass Object
        (
            [summary] => India (Hindi: भारत '; see also other names), officially the Republic of India (Hindi: भारत गणराज्य '), is a sovereign nation in South Asia. It is the seventh largest country by geographical area, the second most populous country, and the most populous democracy in the world (...)
            [title] => India
            [wikipediaUrl] => en.wikipedia.org/wiki/India
            [elevation] => 0
            [countryCode] => IN
            [lng] => %s
            [feature] => country
            [thumbnailImg] => http://www.geonames.org/img/wikipedia/130000/thumb-129295-100.jpg
            [lang] => en
            [lat] => %s
            [population] => 0
        )

    [10] => stdClass Object
        (
            [summary] => The People's Republic of China ( ), commonly known as China, is the largest country in East Asia and the third or fourth largest country in the world.Area rank is disputed with the United States and is either ranked third or fourth. See List of countries and outlying territories by area for more information. With a population of over 1 (...)
            [title] => People's Republic of China
            [wikipediaUrl] => en.wikipedia.org/wiki/People%27s_Republic_of_China
            [elevation] => 0
            [countryCode] => CN
            [lng] => %s
            [feature] => country
            [thumbnailImg] => http://www.geonames.org/img/wikipedia/91000/thumb-90911-100.jpg
            [lang] => en
            [lat] => %s
            [population] => 0
        )

    [11] => stdClass Object
        (
            [summary] => (, ) is one of the most populous cities in the world, the largest city in Pakistan and the provincial capital of Sindh province. Located on the coast of the Arabian Sea, north-west of the Indus River Delta, it was the original capital of Pakistan and remains the cultural and economic hub, as well as being the largest seaport of the country (...)
            [title] => Karachi
            [wikipediaUrl] => en.wikipedia.org/wiki/Karachi
            [elevation] => 0
            [countryCode] => PK
            [lng] => %s
            [feature] => city
            [thumbnailImg] => http://www.geonames.org/img/wikipedia/131000/thumb-130298-100.jpg
            [lang] => en
            [lat] => %s
            [population] => 10752523
        )

    [12] => stdClass Object
        (
            [summary] => Hong KongThe name is often written as ''Hongkong'' in older English texts. The Hong Kong Government officially adopted the current form on 3 September 1926 (Hongkong Government Gazette, Notification 479, 3 September 1926). While the names of most cities in the People's Republic of China are romanised into English using pinyin, the official English name is ''Hong Kong'' rather than (...)
            [title] => Hong Kong
            [wikipediaUrl] => en.wikipedia.org/wiki/Hong_Kong
            [elevation] => 0
            [countryCode] => CN
            [lng] => %s
            [feature] => city
            [thumbnailImg] => http://www.geonames.org/img/wikipedia/46000/thumb-45361-100.jpg
            [lang] => en
            [lat] => %s
            [population] => 7013832
        )

    [13] => stdClass Object
        (
            [summary] =>  (; Postal map spelling: ''Tientsin'') is one of the four municipalities of China that are directly under the central government and have provincial-level status. Its urban area is the third largest in China, after Shanghai and Beijing. Tianjin's urban area is located along the Hai He River. Its ports, some distance away, are located on Bohai Gulf in the Pacific Ocean (...)
            [title] => Tianjin
            [wikipediaUrl] => en.wikipedia.org/wiki/Tianjin
            [elevation] => 0
            [countryCode] => CN
            [lng] => %s
            [feature] => city
            [thumbnailImg] => http://www.geonames.org/img/wikipedia/98000/thumb-97687-100.jpg
            [lang] => en
            [lat] => %s
            [population] => 10316000
        )

    [14] => stdClass Object
        (
            [summary] => :''This page is about the capital city of Indonesia. For The Apache Jakarta project, see Jakarta Project''. Jakarta (also DKI Jakarta), is the capital and largest city of Indonesia. It was formerly known as Sunda Kalapa (397-1527), Jayakarta (1527-1619), Batavia (1619-1942), and Djakarta (1942-1972) (...)
            [title] => Jakarta
            [wikipediaUrl] => en.wikipedia.org/wiki/Jakarta
            [elevation] => 0
            [countryCode] => ID
            [lng] => %s
            [feature] => city
            [thumbnailImg] => http://www.geonames.org/img/wikipedia/126000/thumb-125116-100.jpg
            [lang] => en
            [lat] => %s
            [population] => 8540306
        )

    [15] => stdClass Object
        (
            [summary] => Beijing (Chinese: 北京; pinyin: Běijīng; Wade-Giles: Peiching or Pei-ching; ; Chinese Postal Map Romanization: Peking; literally "Northern capital"; ), a metropolis in northern China, is the capital of the People's Republic of China (PRC). It is also known in English as Peking  (...)
            [title] => Beijing
            [wikipediaUrl] => en.wikipedia.org/wiki/Beijing
            [elevation] => 0
            [countryCode] => CN
            [lng] => %s
            [feature] => city
            [thumbnailImg] => http://www.geonames.org/img/wikipedia/68000/thumb-67101-100.jpg
            [lang] => en
            [lat] => %s
            [population] => 7490618
        )

    [16] => stdClass Object
        (
            [summary] => Shanghai International Port (Group) Co., Ltd. or SIPG is the exclusive operator of all the public terminals in the Port of Shanghai. It is a SSE 50 company.  (...)
            [title] => Shanghai International Port (Group)
            [wikipediaUrl] => en.wikipedia.org/wiki/Shanghai_International_Port_%28Group%29
            [elevation] => 0
            [countryCode] => CN
            [lng] => %s
            [feature] => city
            [lang] => en
            [lat] => %s
            [population] => 13355925
        )

    [17] => stdClass Object
        (
            [summary] => The Islamic Republic of Pakistan , or , is a country in South Asia, marking the region where South Asia converges with Central Asia and the Middle East. [http://encarta.msn.com/encyclopedia_761560851/Pakistan.html Encarta Encyclopedia - Pakistan] [http://www.mideasti.org/countries/countries (...)
            [title] => Pakistan
            [wikipediaUrl] => en.wikipedia.org/wiki/Pakistan
            [elevation] => 0
            [countryCode] => PK
            [lng] => %s
            [feature] => country
            [thumbnailImg] => http://www.geonames.org/img/wikipedia/95000/thumb-94527-100.jpg
            [lang] => en
            [lat] => %s
            [population] => 0
        )

    [18] => stdClass Object
        (
            [summary] => : ''This article is about a place. For the biological behaviour related to ants, see Anting (bird activity).'' Anting  is a town in Shanghai, People's Republic of China. Pronounced An'ting, the placename means "The Pavilion of Peace". Anting is located in the Jiading District (嘉定区) of Shanghai, on the border of the neighboring province of Jiangsu (...)
            [title] => Anting
            [wikipediaUrl] => en.wikipedia.org/wiki/Anting
            [elevation] => 0
            [countryCode] => CN
            [lng] => %s
            [feature] => city
            [lang] => en
            [lat] => %s
            [population] => 13355925
        )

    [19] => stdClass Object
        (
            [summary] => formally , is one of the 47 prefectures of Japan and, unique among the prefectures, provides certain municipal services characteristic of a city, as defined by Japanese law. Because it is the seat of the Japanese government and the Imperial Palace, and the home of the Japanese Imperial Family, Tokyo is the de facto capital of Japan (...)
            [title] => Tokyo
            [wikipediaUrl] => en.wikipedia.org/wiki/Tokyo
            [elevation] => 0
            [countryCode] => JP
            [lng] => %s
            [feature] => city
            [thumbnailImg] => http://www.geonames.org/img/wikipedia/4000/thumb-3415-100.jpg
            [lang] => en
            [lat] => %s
            [population] => 8336611
        )

)
