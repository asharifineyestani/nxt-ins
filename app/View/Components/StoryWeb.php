<?php

namespace App\View\Components;

use Illuminate\View\Component;

class StoryWeb extends Component

{

    public $title;
    public $items;

    /**
     * StoryWeb constructor.
     * @param $title
     * @param $items
     */
    public function __construct($title = null, $items = null)
    {
        $this->title = "فرآیند توسعه";
        $this->items = [
            [

                "title" => "تخمین و برآورد",
                "description" => "قبل از شروع پروژه، ما به منظور کاهش ریسک های فنی و بازار یک تحقیق کامل و تحلیل عمیق در صنعت مرتبط با تجارت  شما انجام می دهیم.با شما پیرامون همه ی نیازهای پروژه مذاکره می کنیم و مشخصات فنی محصول را با توجه به پیشنهادات شما تهیه می کنیم. ما پیرامون تمام جزئیاتی که منجر به رضایت شما از محصول نهایی خواهد شد بحث می کنیم.",
                "image" => "assets/images/story/web-1.jpg",
                "offset" => "",
                "bg_class" => "bg-secondary-1",
            ],
            [
                "title" => "ارائه نسخه ی mvp",
                "description" => "پس از جمع آوری نیازهای خود و تبدیل آنها به نمونه های اولیه شما می توانید بر روی اجزای آن کلیک کرده و بین صفات مختلف پیمایش کنید. ما به شما یک طرح قابل تشخیص با امکان تعامل ساده و شهودی ایجاد می کنیم تا یک دید دقیق تر پیدا کنید و تغییرات مورد نیاز را از ما بخواهید.",
                "image" => "assets/images/story/web-2.jpg",
                "offset" => "offset-md-6 offset-lg-6",
                "bg_class" => "bg-primary-1",
            ],
            [
                "title" => "توسعه",
                "description" => "هنگامی که ما به طراحی اولیه دست پیدا میکنیم, تیم از مهندسان و معماران نرم افزار یک هسته ی امن, پیچیده و قابل اعتماد را برای محصول شما می سازند.   ما توسعه ی خود را با طبق متدولوژی اجایل پیش می بریم. این روش به ما کمک می کند تا از وقت و منابع به بهترین وجه استفاده کنیم ، و  شما همواره در جریان وضعیت پیشرفته پروژه قرار بگیرید و نتیجه را مشاهده نمایید.",
                "image" => "assets/images/story/web-3.jpg",
                "offset" => "",
                "bg_class" => "bg-color-1",
            ],
            [
                "title" => "تست",
                "description" => "در زمان توسعه علاوه بر تست های دستی معمول, تست هایی نیز نوشته می شود تا به صورت اتوماتیک عملکرد یکپارچه اپلیکیشن را مورد تست قرار دهد. این کمک می کند تا توسعه اجزای مختلف محصول عملکرد سایر اجزای آن را تحت الشعاع قرار ندهد. ",
                "image" => "assets/images/story/web-4.jpg",
                "offset" => "offset-md-6 offset-lg-6",
                "bg_class" => "bg-primary-1",
            ],
            [
                "title" => "راه اندازی",
                "description" => "پس از اتمام آزمایش و اطمینان از ثبات ، قابلیت استفاده ، ایمنی و قابل اطمینان بودن تمام اجزای محصول ، ما آماده هستیم تا محصول نهایی را لانچ کنیم.",
                "image" => "assets/images/story/web-5.jpg",
                "offset" => "",
                "bg_class" => "bg-secondary-1",
            ],
            [
                "title" => "نگهداری و پشتیبانی",
                "description" => "همواره جایی برای بهتر شدن وجود دارد زیرا همه ما خواهان پیشرفت نامحدود هستیم. از همین رو ما حتی پس از عرضه محصول هم با مشتری در تماس هستیم و در هر زمانی آماده حل هر مسئله ای می باشیم.",
                "image" => "assets/images/story/web-2.jpg",
                "offset" => "offset-md-6 offset-lg-6",
                "bg_class" => "bg-primary-1",
            ],
        ];
    }


    public function render()
    {
        return view('components.story-web');
    }
}
