--TEST--
Test for Services_GeoNames::hierarchy() method.
--FILE--
<?php
require_once dirname(__FILE__) . '/setup.php';

$geo = Services_GeoNames_factory(substr(basename(__FILE__), 0, -4));
try {
    $ret = $geo->hierarchy(array(
        'geonameId' => 2657896,
        'style'     => 'full'
    ));
    print_r($ret);
} catch (Services_GeoNames_Exception $exc) {
    echo $exc->getMessage();
}
?>
--EXPECT--
Array
(
    [0] => stdClass Object
        (
            [alternateNames] => Array
                (
                    [0] => stdClass Object
                        (
                            [name] => Mondo
                            [lang] => eo
                        )

                    [1] => stdClass Object
                        (
                            [name] => Aarde
                            [lang] => nl
                        )

                    [2] => stdClass Object
                        (
                            [name] => Globe
                            [lang] => en
                        )

                    [3] => stdClass Object
                        (
                            [name] => Orbs
                            [lang] => la
                        )

                    [4] => stdClass Object
                        (
                            [name] => Земля
                            [lang] => ru
                        )

                    [5] => stdClass Object
                        (
                            [name] => el món
                            [lang] => ca
                        )

                    [6] => stdClass Object
                        (
                            [name] => Terra
                            [lang] => it
                        )

                    [7] => stdClass Object
                        (
                            [name] => Pamânt
                            [lang] => ro
                        )

                    [8] => stdClass Object
                        (
                            [name] => Terre
                            [lang] => fr
                        )

                    [9] => stdClass Object
                        (
                            [name] => Föld
                            [lang] => hu
                        )

                    [10] => stdClass Object
                        (
                            [name] => Lurra
                            [lang] => eu
                        )

                    [11] => stdClass Object
                        (
                            [name] => Erde
                            [lang] => de
                        )

                    [12] => stdClass Object
                        (
                            [name] => el planeta
                            [lang] => es
                        )

                    [13] => stdClass Object
                        (
                            [name] => Maa
                            [lang] => fi
                        )

                )

            [countryName] => 
            [fclName] => parks,area, ...
            [lng] => 0
            [adminName2] => 
            [adminName3] => 
            [fcodeName] => 
            [adminName4] => 
            [timezone] => stdClass Object
                (
                    [dstOffset] => 2
                    [gmtOffset] => 1
                    [timeZoneId] => Europe/Zurich
                )

            [fcl] => L
            [name] => Globe
            [fcode] => 
            [geonameId] => 6295630
            [lat] => 0
            [population] => 0
            [adminName1] => 
        )

    [1] => stdClass Object
        (
            [alternateNames] => Array
                (
                    [0] => stdClass Object
                        (
                            [name] => ยุโรป
                            [lang] => th
                        )

                    [1] => stdClass Object
                        (
                            [name] => 欧洲
                            [lang] => zh
                        )

                    [2] => stdClass Object
                        (
                            [name] => أوروبا
                            [lang] => ar
                        )

                    [3] => stdClass Object
                        (
                            [name] => Europa
                            [lang] => pt
                        )

                    [4] => stdClass Object
                        (
                            [name] => Europa
                            [lang] => sv
                        )

                    [5] => stdClass Object
                        (
                            [name] => Europa
                            [lang] => de
                        )

                    [6] => stdClass Object
                        (
                            [name] => Europa
                            [lang] => pl
                        )

                    [7] => stdClass Object
                        (
                            [name] => Europa
                            [lang] => da
                        )

                    [8] => stdClass Object
                        (
                            [name] => an Eoraip
                            [lang] => ga
                        )

                    [9] => stdClass Object
                        (
                            [name] => Châu Âu
                            [lang] => vi
                        )

                    [10] => stdClass Object
                        (
                            [name] => ヨーロッパ
                            [lang] => ja
                        )

                    [11] => stdClass Object
                        (
                            [name] => Eurohpá
                            [lang] => se
                        )

                    [12] => stdClass Object
                        (
                            [name] => Ewrop
                            [lang] => cy
                        )

                    [13] => stdClass Object
                        (
                            [name] => Evropa
                            [lang] => cs
                        )

                    [14] => stdClass Object
                        (
                            [name] => Europe
                            [lang] => fr
                        )

                    [15] => stdClass Object
                        (
                            [name] => Europa
                            [lang] => it
                        )

                    [16] => stdClass Object
                        (
                            [name] => Eiropa
                            [lang] => lv
                        )

                    [17] => stdClass Object
                        (
                            [name] => Evrópa
                            [lang] => is
                        )

                    [18] => stdClass Object
                        (
                            [name] => Europa
                            [lang] => lt
                        )

                    [19] => stdClass Object
                        (
                            [name] => Европа
                            [lang] => ru
                        )

                    [20] => stdClass Object
                        (
                            [name] => Eurooppa
                            [lang] => fi
                        )

                    [21] => stdClass Object
                        (
                            [name] => Europa
                            [lang] => ca
                        )

                    [22] => stdClass Object
                        (
                            [name] => Eropa
                            [lang] => id
                        )

                    [23] => stdClass Object
                        (
                            [name] => Europa
                            [lang] => la
                        )

                    [24] => stdClass Object
                        (
                            [name] => Evropa
                            [lang] => bs
                        )

                    [25] => stdClass Object
                        (
                            [name] => Europa
                            [lang] => eu
                        )

                    [26] => stdClass Object
                        (
                            [name] => Europa
                            [lang] => es
                        )

                    [27] => stdClass Object
                        (
                            [name] => Európa
                            [lang] => hu
                        )

                    [28] => stdClass Object
                        (
                            [name] => Eŭropo
                            [lang] => eo
                        )

                    [29] => stdClass Object
                        (
                            [name] => Europe
                            [lang] => en
                        )

                    [30] => stdClass Object
                        (
                            [name] => Ευρώπη
                            [lang] => el
                        )

                    [31] => stdClass Object
                        (
                            [name] => Европа
                            [lang] => bg
                        )

                    [32] => stdClass Object
                        (
                            [name] => Europa
                            [lang] => no
                        )

                    [33] => stdClass Object
                        (
                            [name] => Avrupa
                            [lang] => tr
                        )

                    [34] => stdClass Object
                        (
                            [name] => यूरोप
                            [lang] => hi
                        )

                    [35] => stdClass Object
                        (
                            [name] => Europa
                            [lang] => nl
                        )

                    [36] => stdClass Object
                        (
                            [name] => אירופה
                            [lang] => he
                        )

                )

            [countryName] => 
            [fclName] => parks,area, ...
            [lng] => 9.140625
            [adminName2] => 
            [adminName3] => 
            [fcodeName] => continent
            [adminName4] => 
            [timezone] => stdClass Object
                (
                    [dstOffset] => 2
                    [gmtOffset] => 1
                    [timeZoneId] => Europe/Vaduz
                )

            [fcl] => L
            [name] => Europe
            [fcode] => CONT
            [geonameId] => 6255148
            [lat] => 48.6909603909
            [population] => 0
            [adminName1] => 
        )

    [2] => stdClass Object
        (
            [alternateNames] => Array
                (
                    [0] => stdClass Object
                        (
                            [name] => สวิตเซอร์แลนด์
                            [lang] => th
                        )

                    [1] => stdClass Object
                        (
                            [name] => შვეიცარია
                            [lang] => ka
                        )

                    [2] => stdClass Object
                        (
                            [name] => Sveits
                            [lang] => nb
                        )

                    [3] => stdClass Object
                        (
                            [name] => སུའིཊ་ཛར་ལེན
                            [lang] => dz
                        )

                    [4] => stdClass Object
                        (
                            [name] => 瑞士
                            [lang] => zh
                        )

                    [5] => stdClass Object
                        (
                            [name] => ஸ்விட்சர்லாந்து
                            [lang] => ta
                        )

                    [6] => stdClass Object
                        (
                            [name] => سويسرا
                            [lang] => ar
                        )

                    [7] => stdClass Object
                        (
                            [name] => ስዊዘርላንድ
                            [lang] => am
                        )

                    [8] => stdClass Object
                        (
                            [name] => Svizzera
                            [lang] => mt
                        )

                    [9] => stdClass Object
                        (
                            [name] => Uswisi
                            [lang] => sw
                        )

                    [10] => stdClass Object
                        (
                            [name] => Switzerland
                            [lang] => ms
                        )

                    [11] => stdClass Object
                        (
                            [name] => Suíça
                            [lang] => pt
                        )

                    [12] => stdClass Object
                        (
                            [name] => Schweiz
                            [lang] => sv
                        )

                    [13] => stdClass Object
                        (
                            [name] => سویس
                            [lang] => ps
                        )

                    [14] => stdClass Object
                        (
                            [name] => Suíza
                            [lang] => gl
                        )

                    [15] => stdClass Object
                        (
                            [name] => Швајцарска
                            [lang] => sr
                        )

                    [16] => stdClass Object
                        (
                            [name] => Switserland
                            [lang] => af
                        )

                    [17] => stdClass Object
                        (
                            [name] => Zvicër
                            [lang] => sq
                        )

                    [18] => stdClass Object
                        (
                            [name] => സ്വിറ്റ്സര്‍ലന്‍ഡ്
                            [lang] => ml
                        )

                    [19] => stdClass Object
                        (
                            [name] => Швајцарија
                            [lang] => mk
                        )

                    [20] => stdClass Object
                        (
                            [name] => Swiiserlaand
                            [lang] => so
                        )

                    [21] => stdClass Object
                        (
                            [name] => Schweiz
                            [lang] => de
                        )

                    [22] => stdClass Object
                        (
                            [name] => Szwajcaria
                            [lang] => pl
                        )

                    [23] => stdClass Object
                        (
                            [name] => Švica
                            [lang] => sl
                        )

                    [24] => stdClass Object
                        (
                            [name] => Schweiz
                            [lang] => da
                        )

                    [25] => stdClass Object
                        (
                            [name] => Švajčiarsko
                            [lang] => sk
                        )

                    [26] => stdClass Object
                        (
                            [name] => An Eilvéis
                            [lang] => ga
                        )

                    [27] => stdClass Object
                        (
                            [name] => Thụy Sĩ
                            [lang] => vi
                        )

                    [28] => stdClass Object
                        (
                            [name] => スイス連邦
                            [lang] => ja
                        )

                    [29] => stdClass Object
                        (
                            [name] => Šveica
                            [lang] => se
                        )

                    [30] => stdClass Object
                        (
                            [name] => Y Swistir
                            [lang] => cy
                        )

                    [31] => stdClass Object
                        (
                            [name] => Švýcarsko
                            [lang] => cs
                        )

                    [32] => stdClass Object
                        (
                            [name] => Suisse
                            [lang] => fr
                        )

                    [33] => stdClass Object
                        (
                            [name] => Confederazione Svizzera
                            [lang] => it
                        )

                    [34] => stdClass Object
                        (
                            [name] => Šveice
                            [lang] => lv
                        )

                    [35] => stdClass Object
                        (
                            [name] => Sviss
                            [lang] => is
                        )

                    [36] => stdClass Object
                        (
                            [name] => Šveicarija
                            [lang] => lt
                        )

                    [37] => stdClass Object
                        (
                            [name] => Sveis
                            [lang] => fo
                        )

                    [38] => stdClass Object
                        (
                            [name] => Швейцария
                            [lang] => ru
                        )

                    [39] => stdClass Object
                        (
                            [name] => ສະວິດເຊີແລນ
                            [lang] => lo
                        )

                    [40] => stdClass Object
                        (
                            [name] => Swisi
                            [lang] => ln
                        )

                    [41] => stdClass Object
                        (
                            [name] => Sveitsi
                            [lang] => fi
                        )

                    [42] => stdClass Object
                        (
                            [name] => سوئزر لینڈ
                            [lang] => ur
                        )

                    [43] => stdClass Object
                        (
                            [name] => Elveţia
                            [lang] => ro
                        )

                    [44] => stdClass Object
                        (
                            [name] => Suïssa
                            [lang] => ca
                        )

                    [45] => stdClass Object
                        (
                            [name] => Swiss
                            [lang] => id
                        )

                    [46] => stdClass Object
                        (
                            [name] => Швейцарія
                            [lang] => uk
                        )

                    [47] => stdClass Object
                        (
                            [name] => سوئیس
                            [lang] => fa
                        )

                    [48] => stdClass Object
                        (
                            [name] => Suissa
                            [lang] => ia
                        )

                    [49] => stdClass Object
                        (
                            [name] => Շվեյցարիա
                            [lang] => hy
                        )

                    [50] => stdClass Object
                        (
                            [name] => Suitza
                            [lang] => eu
                        )

                    [51] => stdClass Object
                        (
                            [name] => Ĩveits
                            [lang] => et
                        )

                    [52] => stdClass Object
                        (
                            [name] => Suiza
                            [lang] => es
                        )

                    [53] => stdClass Object
                        (
                            [name] => Svájc
                            [lang] => hu
                        )

                    [54] => stdClass Object
                        (
                            [name] => Švicarska
                            [lang] => hr
                        )

                    [55] => stdClass Object
                        (
                            [name] => সুইজারল্যান্ড
                            [lang] => bn
                        )

                    [56] => stdClass Object
                        (
                            [name] => Svisujo
                            [lang] => eo
                        )

                    [57] => stdClass Object
                        (
                            [name] => Switzerland
                            [lang] => en
                        )

                    [58] => stdClass Object
                        (
                            [name] => Ελβετία
                            [lang] => el
                        )

                    [59] => stdClass Object
                        (
                            [name] => 스위스
                            [lang] => ko
                        )

                    [60] => stdClass Object
                        (
                            [name] => Швейцария
                            [lang] => bg
                        )

                    [61] => stdClass Object
                        (
                            [name] => ស្វីស
                            [lang] => km
                        )

                    [62] => stdClass Object
                        (
                            [name] => Sveits
                            [lang] => nn
                        )

                    [63] => stdClass Object
                        (
                            [name] => İsviçre
                            [lang] => tr
                        )

                    [64] => stdClass Object
                        (
                            [name] => Швейцарыя
                            [lang] => be
                        )

                    [65] => stdClass Object
                        (
                            [name] => स्विटज़रलैंड
                            [lang] => hi
                        )

                    [66] => stdClass Object
                        (
                            [name] => Zwitserland
                            [lang] => nl
                        )

                    [67] => stdClass Object
                        (
                            [name] => Suisilani
                            [lang] => to
                        )

                    [68] => stdClass Object
                        (
                            [name] => שוויץ
                            [lang] => he
                        )

                )

            [countryName] => Switzerland
            [adminCode1] => 00
            [fclName] => country, state, region,...
            [countryCode] => CH
            [lng] => 8.01426887512
            [adminName2] => 
            [adminName3] => 
            [fcodeName] => independent political entity
            [adminName4] => 
            [timezone] => stdClass Object
                (
                    [dstOffset] => 2
                    [gmtOffset] => 1
                    [timeZoneId] => Europe/Zurich
                )

            [fcl] => A
            [name] => Switzerland
            [fcode] => PCLI
            [geonameId] => 2658434
            [lat] => 47.0001583753
            [population] => 7581000
            [adminName1] => 
        )

    [3] => stdClass Object
        (
            [countryName] => Switzerland
            [adminCode1] => ZH
            [fclName] => country, state, region,...
            [countryCode] => CH
            [lng] => 8.6666667
            [adminName2] => 
            [adminName3] => 
            [fcodeName] => first-order administrative division
            [adminName4] => 
            [timezone] => stdClass Object
                (
                    [dstOffset] => 2
                    [gmtOffset] => 1
                    [timeZoneId] => Europe/Zurich
                )

            [fcl] => A
            [name] => Kanton Zürich
            [fcode] => ADM1
            [geonameId] => 2657895
            [lat] => 47.4166667
            [population] => 1289559
            [adminName1] => Zürich
        )

    [4] => stdClass Object
        (
            [alternateNames] => Array
                (
                    [0] => stdClass Object
                        (
                            [name] => Lungsod ng Zürich
                            [lang] => tl
                        )

                    [1] => stdClass Object
                        (
                            [name] => 苏黎世
                            [lang] => zh
                        )

                    [2] => stdClass Object
                        (
                            [name] => زيورخ
                            [lang] => ar
                        )

                    [3] => stdClass Object
                        (
                            [name] => Canton Zurìcu
                            [lang] => scn
                        )

                    [4] => stdClass Object
                        (
                            [name] => Zürich
                            [lang] => sv
                        )

                    [5] => stdClass Object
                        (
                            [name] => Zurique
                            [lang] => pt
                        )

                    [6] => stdClass Object
                        (
                            [name] => Zürich
                            [lang] => af
                        )

                    [7] => stdClass Object
                        (
                            [name] => Цирих
                            [lang] => sr
                        )

                    [8] => stdClass Object
                        (
                            [name] => Zürich
                            [lang] => sq
                        )

                    [9] => stdClass Object
                        (
                            [name] => Zürich
                            [lang] => de
                        )

                    [10] => stdClass Object
                        (
                            [name] => Zürich
                            [lang] => als
                        )

                    [11] => stdClass Object
                        (
                            [name] => Zurych
                            [lang] => pl
                        )

                    [12] => stdClass Object
                        (
                            [name] => Zürich
                            [lang] => sl
                        )

                    [13] => stdClass Object
                        (
                            [name] => Zürich
                            [lang] => da
                        )

                    [14] => stdClass Object
                        (
                            [name] => Zürich
                            [lang] => sk
                        )

                    [15] => stdClass Object
                        (
                            [name] => Zurich
                            [lang] => pdc
                        )

                    [16] => stdClass Object
                        (
                            [name] => Zürich
                            [lang] => sh
                        )

                    [17] => stdClass Object
                        (
                            [name] => Zürich
                            [lang] => vi
                        )

                    [18] => stdClass Object
                        (
                            [name] => チューリッヒ
                            [lang] => ja
                        )

                    [19] => stdClass Object
                        (
                            [name] => Curych
                            [lang] => cs
                        )

                    [20] => stdClass Object
                        (
                            [name] => Zurigo
                            [lang] => it
                        )

                    [21] => stdClass Object
                        (
                            [name] => Zurich
                            [lang] => fr
                        )

                    [22] => stdClass Object
                        (
                            [name] => Cīrihe
                            [lang] => lv
                        )

                    [23] => stdClass Object
                        (
                            [name] => Zürich
                            [lang] => is
                        )

                    [24] => stdClass Object
                        (
                            [name] => ܨܝܘܪܫ
                            [lang] => arc
                        )

                    [25] => stdClass Object
                        (
                            [name] => Ciūrichas
                            [lang] => lt
                        )

                    [26] => stdClass Object
                        (
                            [name] => Zürich
                            [lang] => io
                        )

                    [27] => stdClass Object
                        (
                            [name] => Цюрих
                            [lang] => ru
                        )

                    [28] => stdClass Object
                        (
                            [name] => Zürich
                            [lang] => fi
                        )

                    [29] => stdClass Object
                        (
                            [name] => Zürich
                            [lang] => ro
                        )

                    [30] => stdClass Object
                        (
                            [name] => Turitg
                            [lang] => rm
                        )

                    [31] => stdClass Object
                        (
                            [name] => Zuric
                            [lang] => ca
                        )

                    [32] => stdClass Object
                        (
                            [name] => Zürich
                            [lang] => id
                        )

                    [33] => stdClass Object
                        (
                            [name] => Turicum
                            [lang] => la
                        )

                    [34] => stdClass Object
                        (
                            [name] => سيۇرىخ
                            [lang] => ug
                        )

                    [35] => stdClass Object
                        (
                            [name] => Zürich
                            [lang] => bs
                        )

                    [36] => stdClass Object
                        (
                            [name] => Zurich
                            [lang] => eu
                        )

                    [37] => stdClass Object
                        (
                            [name] => Tsurique
                            [lang] => frp
                        )

                    [38] => stdClass Object
                        (
                            [name] => Zürich
                            [lang] => et
                        )

                    [39] => stdClass Object
                        (
                            [name] => Zürich
                            [lang] => hu
                        )

                    [40] => stdClass Object
                        (
                            [name] => Zúrich
                            [lang] => es
                        )

                    [41] => stdClass Object
                        (
                            [name] => Zürich
                            [lang] => hr
                        )

                    [42] => stdClass Object
                        (
                            [name] => Zuriko
                            [lang] => eo
                        )

                    [43] => stdClass Object
                        (
                            [name] => Zürich
                            [lang] => en
                        )

                    [44] => stdClass Object
                        (
                            [name] => Zürich
                            [lang] => qu
                        )

                    [45] => stdClass Object
                        (
                            [name] => Ζυρίχη
                            [lang] => el
                        )

                    [46] => stdClass Object
                        (
                            [name] => 취리히
                            [lang] => ko
                        )

                    [47] => stdClass Object
                        (
                            [name] => Цюрих
                            [lang] => bg
                        )

                    [48] => stdClass Object
                        (
                            [name] => Zürich
                            [lang] => no
                        )

                    [49] => stdClass Object
                        (
                            [name] => Zürih
                            [lang] => tr
                        )

                    [50] => stdClass Object
                        (
                            [name] => Zürich
                            [lang] => nn
                        )

                    [51] => stdClass Object
                        (
                            [name] => Цюрых
                            [lang] => be
                        )

                    [52] => stdClass Object
                        (
                            [name] => ज़्यूरिख
                            [lang] => hi
                        )

                    [53] => stdClass Object
                        (
                            [name] => Zürich
                            [lang] => nl
                        )

                    [54] => stdClass Object
                        (
                            [name] => ציריך
                            [lang] => he
                        )

                )

            [countryName] => Switzerland
            [adminCode1] => ZH
            [fclName] => city, village,...
            [countryCode] => CH
            [lng] => 8.55
            [adminName2] => 
            [adminName3] => 
            [fcodeName] => seat of a first-order administrative division
            [adminName4] => 
            [timezone] => stdClass Object
                (
                    [dstOffset] => 2
                    [gmtOffset] => 1
                    [timeZoneId] => Europe/Zurich
                )

            [fcl] => P
            [name] => Zürich
            [fcode] => PPLA
            [geonameId] => 2657896
            [lat] => 47.3666667
            [population] => 341730
            [adminName1] => Zürich
        )

)
