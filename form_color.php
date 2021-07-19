<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./fontawesome/css/all.css" rel="stylesheet"> <!--load all styles -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/main.css">

    <title>فرم رنگرزی جامعه</title>
</head>
<body>
<!-- Code for navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light nav-color flex-row justify-content-between text-white">
    <h1 class="">جامعه</h1>
    <div class="">
        <span class="navbar-brand mb-0 text-center h1 text-white" dir="auto">فرم رنگرزی</span>
    </div>
    <ul class="nav flex-row justify-content-around">
        <i class="fas fa-sign-in-alt"></i>
        <!-- <li class="nav-item">
            <div class="input-group rounded">
                <input type="search" class="form-control rounded" placeholder="جستجو" aria-label="Search"
                       aria-describedby="search-addon"/>
                <span class="input-group-text border-0 mr-1" id="search-addon">
                    <i class="fas fa-search"></i>
                </span>
            </div>
        </li> -->
    </ul>
</nav>
<!-- form color-->
<div class="container mt-4">
    <form method="post" action="submit_form.php">
        <h2 class="align-center">مشخصات کلی:</h2>
        <hr>
        <div class="row">
            <!--ستون اول مشخصات کلی-->
            <div class="col">
                <div class="form-group txt-align-right">
                    <label class="d-block" for="choose_type_commodity">انتخاب نوع کالا:
                        <select id="choose_type_commodity" class="form-control">
                            <option>الیاف</option>
                            <option>نخ</option>
                            <option>پارچه</option>
                        </select>
                    </label>
                </div>
                <div class="form-group txt-align-right">
                    <label class="d-block" for="color_number">شماره رنگ:
                        <input type="text" name="color_number" class="form-control" placeholder="" value=""/>
                    </label>
                </div>
                <div class="form-group txt-align-right">
                    <label class="d-block" for="color_number">شماره سفارش:
                        <input type="text" name="color_number" class="form-control" placeholder="" value=""/>
                    </label>
                </div>
                <div class="form-group txt-align-right">
                    <label class="d-block" for="material">جنس:
                        <select id="material" class="form-control">
                            <option>پشم</option>
                            <option>پلی استر</option>
                            <option>ویسکوز</option>
                            <option>لنین</option>
                            <option>اکرلیک</option>
                            <option>لایکرا</option>
                            <option>پشم/پلی استر</option>
                            <option>پلی استر /ویسکوز</option>
                            <option>پلی استر/ ویسکوز / لایکرا</option>
                        </select>
                    </label>
                </div>
            </div>
            <!--ستون دوم مشخصات کلی-->
            <div class="col-md-3">
                <div class="form-group txt-align-right">
                    <label class="d-block" for="number_quality">شماره کالیته:
                        <input type="text" name="number_quality" class="form-control" placeholder=""
                               value=""/>
                    </label>
                </div>
                <div class="form-group txt-align-right">
                    <label class="d-block" for="number_car">شماره ماشین:
                        <input type="text" name="number_car" class="form-control" placeholder="" value=""/>
                    </label>
                </div>
                <div class="form-group txt-align-right">
                    <label class="d-block" for="thread_score">نمره نخ:
                        <input type="text" name="thread_score" class="form-control" placeholder="" value=""/>
                    </label>
                </div>
                <div class="form-group txt-align-right">
                    <label class="d-block" for="valve_number">عدد دریچه:
                        <input type="text" name="valve_number" class="form-control" placeholder="عدد دریچه:" value=""/>
                    </label>
                </div>
            </div>
            <!--ستون سوم مشخصات کلی-->
            <div class="col">
                <div class="form-group txt-align-right">
                    <label class="d-block" for="percentage">درصد:
                        <input type="text" name="percentage" class="form-control" placeholder="" value=""/>
                    </label>
                </div>
                <div class="form-group txt-align-right">
                    <label class="d-block" for="spinning_code">کد ریسندگی:
                        <input type="text" name="spinning_code" class="form-control" placeholder="" value=""/>
                    </label>
                </div>
                <div class="form-group txt-align-right">
                    <label class="d-block" for="text_PH">PH:
                        <input type="text" name="text_PH" class="form-control" placeholder="" value=""/>
                    </label>
                </div>
                <div class="form-group txt-align-right">
                    <label class="d-block" for="text_LR">LR:
                        <input type="text" name="text_LR" class="form-control" placeholder="" value=""/>
                    </label>
                </div>
            </div>

            <!--ستون چهارم-->
            <div class="col-md-3">
                <div class="form-group">
                    <label class="d-block" for="percentage">
                        <input type="date" name="date" class="form-control" placeholder="تاریخ :" value=""/>
                    </label>
                </div>
                <div class="form-group">
                    <label class="d-block" for="percentage">
                        <input type="text" name="txt_z_pashm" class="form-control" placeholder="ظرافت پشم :" value=""/>
                    </label>
                </div>
                <div class="form-group">
                    <label class="d-block" for="percentage">
                        <input type="text" name="text_z_poli" class="form-control" placeholder="ظرافت پلی استر :"
                               value=""/>
                    </label>
                </div>
                <div class="form-group">
                    <label class="d-block" for="percentage">
                        <input type="text" name="text_z_viscoz" class="form-control" placeholder="ویسکوز :" value=""/>
                    </label>
                </div>
            </div>
        </div>
        <hr>

        <!-- --************** تیترهای فرم دوم*************----------->


        <h2 class="align-center">مشخصات مواد و رنگ ها:</h2>
        <hr>
        <div class="container">
            <div class="row font-weight-bold">
                <div class="col-sm text-center">
                    مقدار
                </div>
                <div class="col-sm text-center">
                    مقدار
                </div>
                <div class="col-sm text-center">
                    مقدار
                </div>
                <div class="col-sm text-center">
                    مقدار
                </div>
                <div class="col-sm">
                    رنگ ومواد شیمیایی:
                </div>
                <div class="col-sm">
                    درصد
                </div>
            </div>
        </div>
        <div class="row">
            <!--ستون اول-->
            <div class="col-md-2">
                <div class="form-group">
                    <input type="text" name="txt1" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group m-2 mb-4 text-center">
                    <label for="inputcarbon"><!--خالی--> </label>
                </div>
                <div class="form-group">
                    <input type="text" name="text3" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="text4" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="txt5" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="txt6" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="text7" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="text8" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="txt9" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group m-2 mb-4 text-center">
                    <label for="inputcarbon"><!--خالی--> </label>
                </div>
                <div class="form-group m-2 mb-4 text-center">
                    <label for="inputcarbon"><!--خالی--> </label>
                </div>
                <div class="form-group">
                    <input type="text" name="text12" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="txt13" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="txt14" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="text15" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="text16" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="text17" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="txt14_1" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="text15_1" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="text16_1" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="text17_1" class="form-control" placeholder="مقدار :" value=""/>
                </div>
            </div>
            <!--ستون دوم-->
            <div class="col-md-2">
                <div class="form-group">
                    <input type="text" name="txt18" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group m-2 mb-4 text-center">
                    <label for="inputcarbon"><!--خالی--> </label>
                </div>
                <div class="form-group">
                    <input type="text" name="text20" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="text21" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="txt22" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="txt23" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="text24" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="text25" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="txt26" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group m-2 mb-4 text-center">
                    <label for="inputcarbon"><!--خالی--> </label>
                </div>
                <div class="form-group m-2 mb-4 text-center">
                    <label for="inputcarbon"><!--خالی--> </label>
                </div>
                <div class="form-group">
                    <input type="text" name="text29" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="txt30" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="txt31" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="text32" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="text33" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="text34" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="txt31_1" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="text32_1" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="text33_1" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="text34_1" class="form-control" placeholder="مقدار :" value=""/>
                </div>
            </div>
            <!--ستون سوم-->
            <div class="col-md-2">
                <div class="form-group">
                    <input type="text" name="txt35" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group m-2 mb-4 text-center">
                    <label for="inputcarbon"><!--خالی--> </label>
                </div>
                <div class="form-group">
                    <input type="text" name="text37" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="text38" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="txt39" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="txt40" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="text41" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="text42" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="txt43" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group m-2 mb-4 text-center">
                    <label for="inputcarbon"><!--خالی--> </label>
                </div>
                <div class="form-group m-2 mb-4 text-center">
                    <label for="inputcarbon"><!--خالی--> </label>
                </div>
                <div class="form-group">
                    <input type="text" name="text46" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="txt47" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="txt48" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="text49" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="text50" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="text51" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="txt48_1" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="text49_1" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="text50_1" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="text51_1" class="form-control" placeholder="مقدار :" value=""/>
                </div>
            </div>

            <!--ستون چهارم-->
            <div class="col-md-2">
                <div class="form-group">
                    <input type="text" name="txt52" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group m-2 mb-4 text-center">
                    <label for="inputcarbon"><!--خالی--> </label>
                </div>
                <div class="form-group">
                    <input type="text" name="text54" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="text55" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="txt56" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="txt57" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="text58" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="text59" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="txt60" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group m-2 mb-4 text-center">
                    <label for="inputcarbon"><!--خالی--> </label>
                </div>
                <div class="form-group m-2 mb-4 text-center">
                    <label for="inputcarbon"><!--خالی--> </label>
                </div>
                <div class="form-group">
                    <input type="text" name="text63" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="txt64" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="txt65" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="text66" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="text67" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="text68" class="form-control" placeholder="مقدار :" value=""/>
                </div>

                <div class="form-group">
                    <input type="text" name="text69" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="txt70" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="txt71" class="form-control" placeholder="مقدار :" value=""/>
                </div>
                <div class="form-group">
                    <input type="text" name="text72" class="form-control" placeholder="مقدار :" value=""/>
                </div>
            </div>

            <!--ستون پنجم-->

            <div class="col-md-3">
                <div class="form-group">
                    <select class="form-control">
                        <option class="hidden" selected disabled> صابون :</option>
                        <option>پشم</option>
                        <option>پلی استر</option>
                    </select>
                </div>
                <div class="form-group">
                    <div class="container">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group m-0">
                                    <label for="inputcarbon">کربنات</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group m-0">
                                    <input type="text" name="text_time1" class="form-control"
                                           placeholder="زمان :"
                                           value=""/>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group m-0">
                                    <input type="text" name="text_dama1" class="form-control"
                                           placeholder="دما :"
                                           value=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <select class="form-control">
                        <option class="hidden" selected disabled>مواد</option>
                        <option>پشم</option>
                        <option>پلی استر</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control">
                        <option class="hidden" selected disabled>مواد</option>
                        <option>پشم</option>
                        <option>پلی استر</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control">
                        <option class="hidden" selected disabled>مواد</option>
                        <option>پشم</option>
                        <option>پلی استر</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control">
                        <option class="hidden" selected disabled>مواد</option>
                        <option>پشم</option>
                        <option>پلی استر</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control">
                        <option class="hidden" selected disabled>مواد</option>
                        <option>پشم</option>
                        <option>پلی استر</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control">
                        <option class="hidden" selected disabled>مواد</option>
                        <option>پشم</option>
                        <option>پلی استر</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control">
                        <option class="hidden" selected disabled>مواد</option>
                        <option>پشم</option>
                        <option>پلی استر</option>
                    </select>
                </div>
                <div class="form-group m-2 mb-4 text-center">
                    <label for="inputcarbon">زمان بالا رفتن دما 100 دقیقه طول بکشد. </label>
                </div>
                <div class="container">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-4">
                                <!--ستون خالی-->
                            </div>
                            <div class="col-4">
                                <div class="form-group m-0">
                                    <input type="text" name="text_time2" class="form-control"
                                           placeholder="زمان :"
                                           value=""/>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group m-0">
                                    <input type="text" name="text_dama2" class="form-control"
                                           placeholder="دما :"
                                           value=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <select class="form-control">
                        <option class="hidden" selected disabled>رنگ</option>
                        <option>پشم</option>
                        <option>پلی استر</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control">
                        <option class="hidden" selected disabled>رنگ</option>
                        <option>پشم</option>
                        <option>پلی استر</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control">
                        <option class="hidden" selected disabled>رنگ</option>
                        <option>پشم</option>
                        <option>پلی استر</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control">
                        <option class="hidden" selected disabled>رنگ</option>
                        <option>پشم</option>
                        <option>پلی استر</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control">
                        <option class="hidden" selected disabled>رنگ</option>
                        <option>پشم</option>
                        <option>پلی استر</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control">
                        <option class="hidden" selected disabled>رنگ</option>
                        <option>پشم</option>
                        <option>پلی استر</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control">
                        <option class="hidden" selected disabled>رنگ</option>
                        <option>پشم</option>
                        <option>پلی استر</option>
                    </select>
                </div>
                <div class="container">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-4">
                                <!--ستون خالی-->
                            </div>
                            <div class="col-4">
                                <div class="form-group m-0">
                                    <input type="text" name="text_time3" class="form-control"
                                           placeholder="زمان :"
                                           value=""/>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group m-0">
                                    <input type="text" name="textdama3" class="form-control"
                                           placeholder="دما :"
                                           value=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="txt_asid" class="form-control" placeholder="اسید :"
                               value=""/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="text_soft" class="form-control" placeholder="نرمکن :"
                               value=""/>
                    </div>
                </div>


            </div>
            <!--ستون ششم-->
            <div class="col-md-1">
                <div class="row">
                    <div class="col">
                        <div class="form-group m-2 mb-4 text-center">
                            <label for="inputcarbon"><!--خالی--> </label>
                        </div>
                        <div class="form-group m-2 mb-4 text-center">
                            <label for="inputcarbon"><!--خالی--> </label>
                        </div>

                    </div>
                    <div class="col">
                        <div class="form-group">
                            <input type="text" name="txtdarsad2" class="form-control" placeholder="درصد :"
                                   value=""/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtdarsad3" class="form-control" placeholder="درصد :"
                                   value=""/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtdarsad4" class="form-control" placeholder="درصد :"
                                   value=""/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtdarsad5" class="form-control" placeholder="درصد :"
                                   value=""/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtdarsad6" class="form-control" placeholder="درصد :"
                                   value=""/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtdarsad7" class="form-control" placeholder="درصد :"
                                   value=""/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtdarsad8" class="form-control" placeholder="درصد :"
                                   value=""/>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group m-2 mb-3 mt-5 text-center">
                            <label for="inputcarbon"><!--خالی--> </label>
                        </div>
                        <div class="form-group m-2 mb-4  text-center">
                            <label for="inputcarbon"><!--خالی--> </label>
                        </div>


                    </div>

                    <div class="col">
                        <div class="form-group">
                            <input type="text" name="txtdarsad2" class="form-control" placeholder="درصد :"
                                   value=""/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtdarsad3" class="form-control" placeholder="درصد :"
                                   value=""/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtdarsad4" class="form-control" placeholder="درصد :"
                                   value=""/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtdarsad5" class="form-control" placeholder="درصد :"
                                   value=""/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtdarsad6" class="form-control" placeholder="درصد :"
                                   value=""/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtdarsad7" class="form-control" placeholder="درصد :"
                                   value=""/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtdarsad8" class="form-control" placeholder="درصد :"
                                   value=""/>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group m-2 mb-4 text-center">
                            <label for="inputcarbon"><!--خالی--> </label>
                        </div>
                        <div class="form-group m-2 mb-4 text-center">
                            <label for="inputcarbon"><!--خالی--> </label>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <input type="submit" name="btnSubmit" class="btn btn-primary btn-lg" value="ثبت فرم "/>
        </div>

</div>
</form>
</div>


<script src="jquery/jquery-3.5.1.slim.min.js"></script>
<script src="jquery/bootstrap.bundle.min.js"></script>


</body>
</html>