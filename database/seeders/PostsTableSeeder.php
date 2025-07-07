<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('posts')->delete();

        \DB::table('posts')->insert(array (
            0 =>
            array (
                'id' => 1,
                'image' => '90P7mBHUcLd3XWlka79kal0N7J7vhx8D5ZkI4Qxk.jpg',
                'title' => 'Frontend Dasturlash: Zamonaviy Veb Saytlarning Yuragi',
                'slug' => NULL,
                'short_description' => NULL,
                'description' => 'Frontend dasturlash — bu foydalanuvchilar ko\'radigan va foydalanadigan barcha veb interfeyslarni yaratish san\'ati. HTML, CSS va JavaScript yordamida ishlab chiqilgan frontend texnologiyalari zamonaviy veb saytlarni chiroyli, qulay va interaktiv qilish imkonini beradi. Ushbu soha dizayn va texnologiyaning uyg\'unligi bo\'lib, dasturchilarga ijodkorlikni ko\'rsatish va foydalanuvchi tajribasini mukammal qilish imkonini beradi. Frontend bilan shug\'ullanib, dunyo uchun qiziqarli va foydali loyihalar yaratishingiz mumkin!',
                'status' => 'active',
                'created_at' => '2025-01-27 23:36:20',
                'updated_at' => '2025-01-27 23:36:20',
            ),
            1 =>
            array (
                'id' => 2,
                'image' => 'PcSVhyesiFH1GBECfvTsulC0jR96HTl4ehpXdBmJ.jpg',
                'title' => 'Frontend Dasturlash: Veb Dunyoning Yaratuvchilari',
                'slug' => NULL,
                'short_description' => NULL,
                'description' => 'Frontend dasturlash — bu foydalanuvchilar uchun chiroyli va qulay veb interfeyslarni yaratishga qaratilgan soha. Bugungi kunda har bir veb-sayt yoki ilova foydalanuvchining ko\'zi tushadigan birinchi narsadan boshlanadi: dizayn va interaktivlik. Frontend texnologiyalari, xususan HTML, CSS va JavaScript, foydalanuvchilarga intuitiv va samarali tajribani taqdim etadi.

Frontend nafaqat texnologiya bilan, balki dizayn bilan ham bevosita bog‘liqdir. Ranglarni uyg‘un tanlash, shriftlarning o‘qilishi oson bo‘lishi, tugmachalarning joylashuvi va animatsiyalarning foydalanuvchi e’tiborini jalb qilishi frontend dasturchilarining asosiy vazifalaridan biridir.

Yana bir muhim jihat — frontend dasturlashning texnologik rivojlanishi. React, Vue va Angular kabi kutubxonalar va freymvorklar yordamida dasturchilar veb ilovalarni tezkorlik bilan ishlab chiqishi va ularni yuqori darajada interaktiv qilish imkoniga ega bo\'lishadi. Shuningdek, responsiv (moslashuvchan) dizayn va mobile-first yondashuvlari orqali har qanday qurilmada mukammal ishlaydigan saytlar yaratiladi.

Frontend dasturlash nafaqat texnik bilimni talab qiladi, balki ijodkorlikni ham oshiradi. Bu sohada ishlash orqali siz nafaqat muammolarni yechishni, balki foydalanuvchilarning hayotini yengillashtiradigan, ularning kundalik ehtiyojlariga mos keladigan mahsulotlar yaratishni o‘rganasiz. Frontend — bu har bir ajoyib veb loyihaning yuragi!

Image: Frontend dasturchi monitor oldida ishlayotgan holda aks ettirilgan. Monitor ekranida rang-barang kodlar va foydalanuvchi interfeysi dizaynlari ko‘rsatilgan. Atrofda turli xil texnologiyalar logotiplari (masalan, React, Vue, Angular), hamda yaratuvchanlikni ifodalovchi muhit (noyob chiroq, kitoblar, va chizilgan maketlar) bo\'lsin.',
                'status' => 'active',
                'created_at' => '2025-01-27 23:38:02',
                'updated_at' => '2025-01-27 23:38:45',
            ),
            2 =>
            array (
                'id' => 3,
                'image' => '0vlMKRKddLDzOkYMHQUzgeeiyzUyj8k0MPFqKPUu.jpg',
                'title' => 'Frontend: Foydalanuvchi Tajribasini Mukammallashtirish San’ati',
                'slug' => NULL,
                'short_description' => NULL,
                'description' => 'Frontend dasturlash — bu veb-sayt yoki ilovaning tashqi qiyofasini yaratish bilan shug‘ullanuvchi muhim yo‘nalishdir. Foydalanuvchi ko‘radigan barcha elementlar, jumladan tugmalar, shakllar, navigatsiya menyulari va animatsiyalar, aynan frontend orqali hayotga tatbiq etiladi. Bu nafaqat texnik bilim, balki dizayn va psixologiyani ham o‘z ichiga olgan ijodiy jarayon.

Frontend texnologiyalari, jumladan HTML, CSS va JavaScript, dasturlash sohasining asosiy poydevori hisoblanadi. Ular yordamida foydalanuvchilar uchun vizual jihatdan jozibador va funksional interfeyslar yaratiladi. Zamonaviy dasturchilar React, Vue.js yoki Angular kabi freymvorklardan foydalanib, murakkab veb-ilovalarni oson va samarali tarzda ishlab chiqish imkoniyatiga ega bo‘lmoqdalar.

Responsiv dizayn bugungi kunda frontendning muhim jihatlaridan biridir. Bu yondashuv orqali veb-sayt har qanday qurilmada – kompyuterdan tortib, smartfonlargacha – qulay ko‘rinishga ega bo‘ladi. Shuningdek, foydalanuvchi tajribasini yaxshilash maqsadida animatsiyalar va interaktiv elementlardan foydalanish saytni yanada jozibador va esda qolarli qiladi.

Frontend dasturlash sohasida ishlash orqali dasturchilar nafaqat texnik ko‘nikmalarini rivojlantiradilar, balki foydalanuvchilarning ehtiyojlarini tushunishni ham o‘rganadilar. Bu soha har kuni rivojlanib borayotgan texnologiyalar va yangi uslublar bilan birga o‘zining muhimligini oshirmoqda. Frontend bilan siz dunyoni o‘zgartirish va odamlarning kundalik hayotini yengillashtirish uchun imkoniyat yaratasiz!

Image: Zamonaviy frontend dasturchi chiroyli, yaratuvchan muhitda ishlayotgan holatda tasvirlangan. Monitor ekranida rang-barang kod satrlari, veb dizayn elementlari va interaktiv foydalanuvchi interfeysi ko‘rsatilgan. Atrofda mobil telefon, planshet va kitoblar joylashgan bo‘lib, ular veb-ishlanmalar dunyosini aks ettiradi.',
                'status' => 'active',
                'created_at' => '2025-01-27 23:40:06',
                'updated_at' => '2025-01-27 23:40:06',
            ),
            3 =>
            array (
                'id' => 4,
                'image' => 'DiO44bswY6hqNLtDGvZXxJVkyMrQyEQwqGiYsQ79.jpg',
                'title' => 'Frontend: Veb Interfeyslarning Asosiy Qismi',
                'slug' => NULL,
                'short_description' => NULL,
                'description' => 'Frontend dasturlash foydalanuvchilarning veb-sayt yoki ilovalar bilan muloqot qiladigan qismidir. Bu yo‘nalish texnologiya va ijodkorlikni birlashtirgan holda, foydalanuvchilar uchun chiroyli va funksional interfeyslar yaratishni maqsad qiladi. Har bir tugma, menyu, animatsiya yoki ranglarning uyg‘unligi frontend orqali yaratiladi.

HTML, CSS va JavaScript — frontendning ustunlari hisoblanadi. HTML tarkibni tuzadi, CSS uni bezaydi, JavaScript esa interaktivlikni ta’minlaydi. Bugungi kunda dasturchilar tezkor va moslashuvchan ilovalarni yaratishda React, Vue.js va Angular kabi freymvorklardan foydalanmoqda. Ushbu vositalar murakkab muammolarni oson va samarali tarzda hal qilish imkoniyatini beradi.

Bundan tashqari, frontend sohasida responsiv dizayn juda muhim. Bu yondashuv har qanday ekran o‘lchamida qulay ishlaydigan interfeyslar yaratishni ta’minlaydi. Zamonaviy foydalanuvchilar uchun mobil moslashuvchanlik talab darajasiga aylangan. Frontend dasturchilar foydalanuvchilarni jalb qiladigan animatsiyalar va qulay dizayn orqali tajribani yaxshilashga intiladilar.

Frontend dasturlashni o‘rganish orqali siz nafaqat veb-ishlanmalar bilan tanishasiz, balki dizayn, foydalanuvchi psixologiyasi va ijodkorlik sohalarida ham rivojlanasiz. Bu soha yangi imkoniyatlar eshigini ochadi va dunyoga foydali mahsulotlar yaratish imkonini beradi. Frontend – bu kelajak texnologiyalarining kalitidir!

Image: Rasmda frontend dasturchi zamonaviy ish joyida ishlayotgani ko‘rsatilgan. Monitor ekranida murakkab, ammo chiroyli interfeys dizayni, atrofda esa turli qurilmalar (telefon, planshet) va kodlar aks etgan. Yorqin, ilhomlantiruvchi muhit yaratilgan.',
                'status' => 'active',
                'created_at' => '2025-01-27 23:42:00',
                'updated_at' => '2025-01-27 23:42:00',
            ),
        ));

        $lastId = \DB::table('posts')->orderBy('id', 'desc')->first();
    }
}
