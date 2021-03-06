<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountryFlag extends Controller
{
    public function countrycode()
    {
    
        return response()->json([
                 ["countryCode"=>"AF","countryNumberCode"=>	004,"countryName"=>"  Afghanistan (+004)"],
                ["countryCode"=>"DZ","countryNumberCode"=>213,"countryName"=>"  Algeria (+213)"],
                ["countryCode"=>"AD","countryNumberCode"=>376,"countryName"=>"Andorra (+376)"],
                ["countryCode"=>"AO","countryNumberCode"=>244,"countryName"=>"Angola (+244)"],
                ["countryCode"=>"AI","countryNumberCode"=>1264,"countryName"=>"Anguilla (+1264)"],
                ["countryCode"=>"AG","countryNumberCode"=>1268,"countryName"=>"Antigua &amp; Barbuda (+1268)"],
                ["countryCode"=>"AR","countryNumberCode"=>54,"countryName"=>"Argentina (+54)"],
                ["countryCode"=>"AM","countryNumberCode"=>374,"countryName"=>"Armenia (+374)"],
                ["countryCode"=>"AW","countryNumberCode"=>297,"countryName"=>"Aruba (+297)"],
                ["countryCode"=>"AU","countryNumberCode"=>61,"countryName"=>"Australia (+61)"],
                ["countryCode"=>"AT","countryNumberCode"=>43,"countryName"=>"Austria (+43)"],
                ["countryCode"=>"AZ","countryNumberCode"=>994,"countryName"=>"Azerbaijan (+994)"],
                ["countryCode"=>"BS","countryNumberCode"=>1242,"countryName"=>"Bahamas (+1242)"],
                ["countryCode"=>"BH","countryNumberCode"=>973,"countryName"=>"Bahrain (+973)"],
                ["countryCode"=>"BD","countryNumberCode"=>880,"countryName"=>"Bangladesh (+880)"],
                ["countryCode"=>"BB","countryNumberCode"=>1246,"countryName"=>"Barbados (+1246)"],
                ["countryCode"=>"BY","countryNumberCode"=>375,"countryName"=>"Belarus (+375)"],
                ["countryCode"=>"BE","countryNumberCode"=>32,"countryName"=>"Belgium (+32)"],
                ["countryCode"=>"BZ","countryNumberCode"=>501,"countryName"=>"Belize (+501)"],
                ["countryCode"=>"BJ","countryNumberCode"=>229,"countryName"=>"Benin (+229)"],
                ["countryCode"=>"BM","countryNumberCode"=>1441,"countryName"=>"Bermuda (+1441)"],
                ["countryCode"=>"BT","countryNumberCode"=>975,"countryName"=>"Bhutan (+975)"],
                ["countryCode"=>"BO","countryNumberCode"=>591,"countryName"=>"Bolivia (+591)"],
                ["countryCode"=>"BA","countryNumberCode"=>387,"countryName"=>"Bosnia Herzegovina (+387)"],
                ["countryCode"=>"BW","countryNumberCode"=>267,"countryName"=>"Botswana (+267)"],
                ["countryCode"=>"BR","countryNumberCode"=>55,"countryName"=>"Brazil (+55)"],
                ["countryCode"=>"BN","countryNumberCode"=>673,"countryName"=>"Brunei (+673)"],
                ["countryCode"=>"BG","countryNumberCode"=>359,"countryName"=>"Bulgaria (+359)"],
                ["countryCode"=>"BF","countryNumberCode"=>226,"countryName"=>"Burkina Faso (+226)"],
                ["countryCode"=>"BI","countryNumberCode"=>257,"countryName"=>"Burundi (+257)"],
                ["countryCode"=>"KH","countryNumberCode"=>855,"countryName"=>"Cambodia (+855)"],
                ["countryCode"=>"CM","countryNumberCode"=>237,"countryName"=>"Cameroon (+237)"],
                ["countryCode"=>"CA","countryNumberCode"=>1,"countryName"=>"Canada (+1)"],
                ["countryCode"=>"CV","countryNumberCode"=>238,"countryName"=>"Cape Verde Islands (+238)"],
                ["countryCode"=>"KY","countryNumberCode"=>1345,"countryName"=>"Cayman Islands (+1345)"],
                ["countryCode"=>"CF","countryNumberCode"=>236,"countryName"=>"Central African Republic (+236)"],
                ["countryCode"=>"CL","countryNumberCode"=>56,"countryName"=>"Chile (+56)"],
                ["countryCode"=>"CN","countryNumberCode"=>86,"countryName"=>"China (+86)"],
                ["countryCode"=>"CO","countryNumberCode"=>57,"countryName"=>"Colombia (+57)"],
                ["countryCode"=>"KM","countryNumberCode"=>269,"countryName"=>"Comoros (+269)"],
                ["countryCode"=>"CG","countryNumberCode"=>242,"countryName"=>"Congo (+242)"],
                ["countryCode"=>"CK","countryNumberCode"=>682,"countryName"=>"Cook Islands (+682)"],
                ["countryCode"=>"CR","countryNumberCode"=>506,"countryName"=>"Costa Rica (+506)"],
                ["countryCode"=>"HR","countryNumberCode"=>385,"countryName"=>"Croatia (+385)"],
                ["countryCode"=>"CU","countryNumberCode"=>53,"countryName"=>"Cuba (+53)"],
                ["countryCode"=>"CY","countryNumberCode"=>90392,"countryName"=>"Cyprus North (+90392)"],
                ["countryCode"=>"CY","countryNumberCode"=>357,"countryName"=>"Cyprus South (+357)"],
                ["countryCode"=>"CZ","countryNumberCode"=>42,"countryName"=>"Czech Republic (+42)"],
                ["countryCode"=>"DK","countryNumberCode"=>45,"countryName"=>"Denmark (+45)"],
                ["countryCode"=>"DJ","countryNumberCode"=>253,"countryName"=>"Djibouti (+253)"],
                ["countryCode"=>"DM","countryNumberCode"=>1809,"countryName"=>"Dominica (+1809)"],
                ["countryCode"=>"DO","countryNumberCode"=>1809,"countryName"=>"Dominican Republic (+1809)"],
                ["countryCode"=>"EC","countryNumberCode"=>593,"countryName"=>"Ecuador (+593)"],
                ["countryCode"=>"EG","countryNumberCode"=>20,"countryName"=>"Egypt (+20)"],
                ["countryCode"=>"SV","countryNumberCode"=>503,"countryName"=>"El Salvador (+503)"],
                ["countryCode"=>"GQ","countryNumberCode"=>240,"countryName"=>"Equatorial Guinea (+240)"],
                ["countryCode"=>"ER","countryNumberCode"=>291,"countryName"=>"Eritrea (+291)"],
                ["countryCode"=>"EE","countryNumberCode"=>372,"countryName"=>"Estonia (+372)"],
                ["countryCode"=>"ET","countryNumberCode"=>251,"countryName"=>"Ethiopia (+251)"],
                ["countryCode"=>"FK","countryNumberCode"=>500,"countryName"=>"Falkland Islands (+500)"],
                ["countryCode"=>"FO","countryNumberCode"=>298,"countryName"=>"Faroe Islands (+298)"],
                ["countryCode"=>"FJ","countryNumberCode"=>679,"countryName"=>"Fiji (+679)"],
                ["countryCode"=>"FI","countryNumberCode"=>358,"countryName"=>"Finland (+358)"],
                ["countryCode"=>"FR","countryNumberCode"=>33,"countryName"=>"France (+33)"],
                ["countryCode"=>"GF","countryNumberCode"=>594,"countryName"=>"French Guiana (+594)"],
                ["countryCode"=>"PF","countryNumberCode"=>689,"countryName"=>"French Polynesia (+689)"],
                ["countryCode"=>"GA","countryNumberCode"=>241,"countryName"=>"Gabon (+241)"],
                ["countryCode"=>"GM","countryNumberCode"=>220,"countryName"=>"Gambia (+220)"],
                ["countryCode"=>"GE","countryNumberCode"=>7880,"countryName"=>"Georgia (+7880)"],
                ["countryCode"=>"DE","countryNumberCode"=>49,"countryName"=>"Germany (+49)"],
                ["countryCode"=>"GH","countryNumberCode"=>233,"countryName"=>"Ghana (+233)"],
                ["countryCode"=>"GI","countryNumberCode"=>350,"countryName"=>"Gibraltar (+350)"],
                ["countryCode"=>"GR","countryNumberCode"=>30,"countryName"=>"Greece (+30)"],
                ["countryCode"=>"GL","countryNumberCode"=>299,"countryName"=>"Greenland (+299)"],
                ["countryCode"=>"GD","countryNumberCode"=>1473,"countryName"=>"Grenada (+1473)"],
                ["countryCode"=>"GP","countryNumberCode"=>590,"countryName"=>"Guadeloupe (+590)"],
                ["countryCode"=>"GU","countryNumberCode"=>671,"countryName"=>"Guam (+671)"],
                ["countryCode"=>"GT","countryNumberCode"=>502,"countryName"=>"Guatemala (+502)"],
                ["countryCode"=>"GN","countryNumberCode"=>224,"countryName"=>"Guinea (+224)"],
                ["countryCode"=>"GW","countryNumberCode"=>245,"countryName"=>"Guinea - Bissau (+245)"],
                ["countryCode"=>"GY","countryNumberCode"=>592,"countryName"=>"Guyana (+592)"],
                ["countryCode"=>"HT","countryNumberCode"=>509,"countryName"=>"Haiti (+509)"],
                ["countryCode"=>"HN","countryNumberCode"=>504,"countryName"=>"Honduras (+504)"],
                ["countryCode"=>"HK","countryNumberCode"=>852,"countryName"=>"Hong Kong (+852)"],
                ["countryCode"=>"HU","countryNumberCode"=>36,"countryName"=>"Hungary (+36)"],
                ["countryCode"=>"IS","countryNumberCode"=>354,"countryName"=>"Iceland (+354)"],
                ["countryCode"=>"IN","countryNumberCode"=>91,"countryName"=>"India (+91)"],
                ["countryCode"=>"ID","countryNumberCode"=>62,"countryName"=>"Indonesia (+62)"],
                ["countryCode"=>"IR","countryNumberCode"=>98,"countryName"=>"Iran (+98)"],
                ["countryCode"=>"IQ","countryNumberCode"=>964,"countryName"=>"Iraq (+964)"],
                ["countryCode"=>"IE","countryNumberCode"=>353,"countryName"=>"Ireland (+353)"],
                ["countryCode"=>"IL","countryNumberCode"=>972,"countryName"=>"Israel (+972)"],
                ["countryCode"=>"IT","countryNumberCode"=>39,"countryName"=>"Italy (+39)"],
                ["countryCode"=>"JM","countryNumberCode"=>1876,"countryName"=>"Jamaica (+1876)"],
                ["countryCode"=>"JP","countryNumberCode"=>81,"countryName"=>"Japan (+81)"],
                ["countryCode"=>"JO","countryNumberCode"=>962,"countryName"=>"Jordan (+962)"],
                ["countryCode"=>"KZ","countryNumberCode"=>7,"countryName"=>"Kazakhstan (+7)"],
                ["countryCode"=>"KE","countryNumberCode"=>254,"countryName"=>"Kenya (+254)"],
                ["countryCode"=>"KI","countryNumberCode"=>686,"countryName"=>"Kiribati (+686)"],
                ["countryCode"=>"KP","countryNumberCode"=>850,"countryName"=>"Korea North (+850)"],
                ["countryCode"=>"KR","countryNumberCode"=>82,"countryName"=>"Korea South (+82)"],
                ["countryCode"=>"KW","countryNumberCode"=>965,"countryName"=>"Kuwait (+965)"],
                ["countryCode"=>"KG","countryNumberCode"=>996,"countryName"=>"Kyrgyzstan (+996)"],
                ["countryCode"=>"LA","countryNumberCode"=>856,"countryName"=>"Laos (+856)"],
                ["countryCode"=>"LV","countryNumberCode"=>371,"countryName"=>"Latvia (+371)"],
                ["countryCode"=>"LB","countryNumberCode"=>961,"countryName"=>"Lebanon (+961)"],
                ["countryCode"=>"LS","countryNumberCode"=>266,"countryName"=>"Lesotho (+266)"],
                ["countryCode"=>"LR","countryNumberCode"=>231,"countryName"=>"Liberia (+231)"],
                ["countryCode"=>"LY","countryNumberCode"=>218,"countryName"=>"Libya (+218)"],
                ["countryCode"=>"LI","countryNumberCode"=>417,"countryName"=>"Liechtenstein (+417)"],
                ["countryCode"=>"LT","countryNumberCode"=>370,"countryName"=>"Lithuania (+370)"],
                ["countryCode"=>"LU","countryNumberCode"=>352,"countryName"=>"Luxembourg (+352)"],
                ["countryCode"=>"MO","countryNumberCode"=>853,"countryName"=>"Macao (+853)"],
                ["countryCode"=>"MK","countryNumberCode"=>389,"countryName"=>"Macedonia (+389)"],
                ["countryCode"=>"MG","countryNumberCode"=>261,"countryName"=>"Madagascar (+261)"],
                ["countryCode"=>"MW","countryNumberCode"=>265,"countryName"=>"Malawi (+265)"],
                ["countryCode"=>"MY","countryNumberCode"=>60,"countryName"=>"Malaysia (+60)"],
                ["countryCode"=>"MV","countryNumberCode"=>960,"countryName"=>"Maldives (+960)"],
                ["countryCode"=>"ML","countryNumberCode"=>223,"countryName"=>"Mali (+223)"],
                ["countryCode"=>"MT","countryNumberCode"=>356,"countryName"=>"Malta (+356)"],
                ["countryCode"=>"MH","countryNumberCode"=>692,"countryName"=>"Marshall Islands (+692)"],
                ["countryCode"=>"MQ","countryNumberCode"=>596,"countryName"=>"Martinique (+596)"],
                ["countryCode"=>"MR","countryNumberCode"=>222,"countryName"=>"Mauritania (+222)"],
                ["countryCode"=>"YT","countryNumberCode"=>269,"countryName"=>"Mayotte (+269)"],
                ["countryCode"=>"MX","countryNumberCode"=>52,"countryName"=>"Mexico (+52)"],
                ["countryCode"=>"FM","countryNumberCode"=>691,"countryName"=>"Micronesia (+691)"],
                ["countryCode"=>"MD","countryNumberCode"=>373,"countryName"=>"Moldova (+373)"],
                ["countryCode"=>"MC","countryNumberCode"=>377,"countryName"=>"Monaco (+377)"],
                ["countryCode"=>"MN","countryNumberCode"=>976,"countryName"=>"Mongolia (+976)"],
                ["countryCode"=>"MS","countryNumberCode"=>1664,"countryName"=>"Montserrat (+1664)"],
                ["countryCode"=>"MA","countryNumberCode"=>212,"countryName"=>"Morocco (+212)"],
                ["countryCode"=>"MZ","countryNumberCode"=>258,"countryName"=>"Mozambique (+258)"],
                ["countryCode"=>"MN","countryNumberCode"=>95,"countryName"=>"Myanmar (+95)"],
                ["countryCode"=>"NA","countryNumberCode"=>264,"countryName"=>"Namibia (+264)"],
                ["countryCode"=>"NR","countryNumberCode"=>674,"countryName"=>"Nauru (+674)"],
                ["countryCode"=>"NP","countryNumberCode"=>977,"countryName"=>"Nepal (+977)"],
                ["countryCode"=>"NL","countryNumberCode"=>31,"countryName"=>"Netherlands (+31)"],
                ["countryCode"=>"NC","countryNumberCode"=>687,"countryName"=>"New Caledonia (+687)"],
                ["countryCode"=>"NZ","countryNumberCode"=>64,"countryName"=>"New Zealand (+64)"],
                ["countryCode"=>"NI","countryNumberCode"=>505,"countryName"=>"Nicaragua (+505)"],
                ["countryCode"=>"NE","countryNumberCode"=>227,"countryName"=>"Niger (+227)"],
                ["countryCode"=>"NG","countryNumberCode"=>234,"countryName"=>"Nigeria (+234)"],
                ["countryCode"=>"NU","countryNumberCode"=>683,"countryName"=>"Niue (+683)"],
                ["countryCode"=>"NF","countryNumberCode"=>672,"countryName"=>"Norfolk Islands (+672)"],
                ["countryCode"=>"NP","countryNumberCode"=>670,"countryName"=>"Northern Marianas (+670)"],
                ["countryCode"=>"NO","countryNumberCode"=>47,"countryName"=>"Norway (+47)"],
                ["countryCode"=>"OM","countryNumberCode"=>968,"countryName"=>"Oman (+968)"],
                ["countryCode"=>"PK","countryNumberCode"=>586,"countryName"=>"Pakistan(+586)"],
                ["countryCode"=>"PW","countryNumberCode"=>680,"countryName"=>"Palau (+680)"],
                ["countryCode"=>"PA","countryNumberCode"=>507,"countryName"=>"Panama (+507)"],
                ["countryCode"=>"PG","countryNumberCode"=>675,"countryName"=>"Papua New Guinea (+675)"],
                ["countryCode"=>"PY","countryNumberCode"=>595,"countryName"=>"Paraguay (+595)"],
                ["countryCode"=>"PE","countryNumberCode"=>51,"countryName"=>"Peru (+51)"],
                ["countryCode"=>"PH","countryNumberCode"=>63,"countryName"=>"Philippines (+63)"],
                ["countryCode"=>"PL","countryNumberCode"=>48,"countryName"=>"Poland (+48)"],
                ["countryCode"=>"PT","countryNumberCode"=>351,"countryName"=>"Portugal (+351)"],
                ["countryCode"=>"PR","countryNumberCode"=>1787,"countryName"=>"Puerto Rico (+1787)"],
                ["countryCode"=>"QA","countryNumberCode"=>974,"countryName"=>"Qatar (+974)"],
                ["countryCode"=>"RE","countryNumberCode"=>262,"countryName"=>"Reunion (+262)"],
                ["countryCode"=>"RO","countryNumberCode"=>40,"countryName"=>"Romania (+40)"],
                ["countryCode"=>"RU","countryNumberCode"=>7,"countryName"=>"Russia (+7)"],
                ["countryCode"=>"RW","countryNumberCode"=>250,"countryName"=>"Rwanda (+250)"],
                ["countryCode"=>"SM","countryNumberCode"=>378,"countryName"=>"San Marino (+378)"],
                ["countryCode"=>"ST","countryNumberCode"=>239,"countryName"=>"Sao Tome &amp; Principe (+239)"],
                ["countryCode"=>"SA","countryNumberCode"=>966,"countryName"=>"Saudi Arabia (+966)"],
                ["countryCode"=>"SN","countryNumberCode"=>221,"countryName"=>"Senegal (+221)"],
                ["countryCode"=>"CS","countryNumberCode"=>381,"countryName"=>"Serbia (+381)"],
                ["countryCode"=>"SC","countryNumberCode"=>248,"countryName"=>"Seychelles (+248)"],
                ["countryCode"=>"SL","countryNumberCode"=>232,"countryName"=>"Sierra Leone (+232)"],
                ["countryCode"=>"SG","countryNumberCode"=>65,"countryName"=>"Singapore (+65)"],
                ["countryCode"=>"SK","countryNumberCode"=>421,"countryName"=>"Slovak Republic (+421)"],
                ["countryCode"=>"SI","countryNumberCode"=>386,"countryName"=>"Slovenia (+386)"],
                ["countryCode"=>"SB","countryNumberCode"=>677,"countryName"=>"Solomon Islands (+677)"],
                ["countryCode"=>"SO","countryNumberCode"=>252,"countryName"=>"Somalia (+252)"],
                ["countryCode"=>"ZA","countryNumberCode"=>27,"countryName"=>"South Africa (+27)"],
                ["countryCode"=>"ES","countryNumberCode"=>34,"countryName"=>"Spain (+34)"],
                ["countryCode"=>"LK","countryNumberCode"=>94,"countryName"=>"Sri Lanka (+94)"],
                ["countryCode"=>"SH","countryNumberCode"=>290,"countryName"=>"St. Helena (+290)"],
                ["countryCode"=>"KN","countryNumberCode"=>1869,"countryName"=>"St. Kitts (+1869)"],
                ["countryCode"=>"SC","countryNumberCode"=>1758,"countryName"=>"St. Lucia (+1758)"],
                ["countryCode"=>"SD","countryNumberCode"=>249,"countryName"=>"Sudan (+249)"],
                ["countryCode"=>"SR","countryNumberCode"=>597,"countryName"=>"Suriname (+597)"],
                ["countryCode"=>"SZ","countryNumberCode"=>268,"countryName"=>"Swaziland (+268)"],
                ["countryCode"=>"SE","countryNumberCode"=>46,"countryName"=>"Sweden (+46)"],
                ["countryCode"=>"CH","countryNumberCode"=>41,"countryName"=>"Switzerland (+41)"],
                ["countryCode"=>"SI","countryNumberCode"=>963,"countryName"=>"Syria (+963)"],
                ["countryCode"=>"TW","countryNumberCode"=>886,"countryName"=>"Taiwan (+886)"],
                ["countryCode"=>"TJ","countryNumberCode"=>7,"countryName"=>"Tajikstan (+7)"],
                ["countryCode"=>"TH","countryNumberCode"=>66,"countryName"=>"Thailand (+66)"],
                ["countryCode"=>"TG","countryNumberCode"=>228,"countryName"=>"Togo (+228)"],
                ["countryCode"=>"TO","countryNumberCode"=>676,"countryName"=>"Tonga (+676)"],
                ["countryCode"=>"TT","countryNumberCode"=>1868,"countryName"=>"Trinidad &amp; Tobago (+1868)"],
                ["countryCode"=>"TN","countryNumberCode"=>216,"countryName"=>"Tunisia (+216)"],
                ["countryCode"=>"TR","countryNumberCode"=>90,"countryName"=>"Turkey (+90)"],
                ["countryCode"=>"TM","countryNumberCode"=>7,"countryName"=>"Turkmenistan (+7)"],
                ["countryCode"=>"TM","countryNumberCode"=>993,"countryName"=>"Turkmenistan (+993)"],
                ["countryCode"=>"TC","countryNumberCode"=>1649,"countryName"=>"Turks &amp; Caicos Islands (+1649)"],
                ["countryCode"=>"TV","countryNumberCode"=>688,"countryName"=>"Tuvalu (+688)"],
                ["countryCode"=>"UG","countryNumberCode"=>256,"countryName"=>"Uganda (+256)"],
                ["countryCode"=>"GB","countryNumberCode"=>44,"countryName"=>"UK (+44)"],
                ["countryCode"=>"UA","countryNumberCode"=>380,"countryName"=>"Ukraine (+380)"],
                ["countryCode"=>"AE","countryNumberCode"=>971,"countryName"=>"United Arab Emirates (+971)"],
                ["countryCode"=>"UY","countryNumberCode"=>598,"countryName"=>"Uruguay (+598)"],
                ["countryCode"=>"US","countryNumberCode"=>1,"countryName"=>"USA (+1)"],
                ["countryCode"=>"UZ","countryNumberCode"=>7,"countryName"=>"Uzbekistan (+7)"],
                ["countryCode"=>"VU","countryNumberCode"=>678,"countryName"=>"Vanuatu (+678)"],
                ["countryCode"=>"VA","countryNumberCode"=>379,"countryName"=>"Vatican City (+379)"],
                ["countryCode"=>"VE","countryNumberCode"=>58,"countryName"=>"Venezuela (+58)"],
                ["countryCode"=>"VN","countryNumberCode"=>84,"countryName"=>"Vietnam (+84)"],
                ["countryCode"=>"VG","countryNumberCode"=>84,"countryName"=>"Virgin Islands - British (+1284)"],
                ["countryCode"=>"VI","countryNumberCode"=>84,"countryName"=>"Virgin Islands - US (+1340)"],
                ["countryCode"=>"WF","countryNumberCode"=>681,"countryName"=>"Wallis &amp; Futuna (+681)"],
                ["countryCode"=>"YE","countryNumberCode"=>969,"countryName"=>"Yemen (North)(+969)"],
                ["countryCode"=>"YE","countryNumberCode"=>967,"countryName"=>"Yemen (South)(+967)"],
                ["countryCode"=>"ZM","countryNumberCode"=>260,"countryName"=>"Zambia (+260)"],
                ["countryCode"=>"ZW","countryNumberCode"=>263,"countryName"=>"Zimbabwe (+263)"]
                
                
         ] );
        }
    }
