<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'client_id' => 1,
                'name' => 'Bobby McCullough Sr.',
                'email' => 'white.garret@yahoo.com',
                'password' => '$2y$10$5veM2Pr.he8Qu3zUvpYmJeN.yvqhJhoQN9p9ju3pOBjwWMdF7dJ2O',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:27',
                'updated_at' => '2017-05-30 18:40:27',
            ),
            1 => 
            array (
                'client_id' => 1,
                'name' => 'Furman West',
                'email' => 'weston58@morissette.com',
                'password' => '$2y$10$82OgIg4ovnz0TlGhyJN93uF1qN4jgWPhC6JIwXYqXIy.hB7Tuapy6',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:27',
                'updated_at' => '2017-05-30 18:40:27',
            ),
            2 => 
            array (
                'client_id' => 1,
                'name' => 'Keshaun Kerluke',
                'email' => 'dalton44@hotmail.com',
                'password' => '$2y$10$q59s9W0GFE0F6ZxWEpmLkuqnlKeBWLU.LnshZ0iTqVG9x9EGyAbWK',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:27',
                'updated_at' => '2017-05-30 18:40:27',
            ),
            3 => 
            array (
                'client_id' => 1,
                'name' => 'Terrill Johnson',
                'email' => 'yschowalter@swift.com',
                'password' => '$2y$10$ISsbegZoFI5Jcf2CyX2cO.BZ04Wa9M53dj4TvmXLZzLs246dGxd.S',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:27',
                'updated_at' => '2017-05-30 18:40:27',
            ),
            4 => 
            array (
                'client_id' => 1,
                'name' => 'Ms. Chloe Von I',
                'email' => 'michele.oconnell@hotmail.com',
                'password' => '$2y$10$29EFwvEtP7GrZgUd7zeqgOtmxesuU250UEyTIce5GoJtQiDRlMVT2',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:27',
                'updated_at' => '2017-05-30 18:40:27',
            ),
            5 => 
            array (
                'client_id' => 1,
                'name' => 'Einar Stiedemann PhD',
                'email' => 'bernard57@kris.com',
                'password' => '$2y$10$6wBU6bz6ZHv/SyvGOBTqTuid.ewM8hMZa.2wD95i5cr1VG1xflYW.',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:27',
                'updated_at' => '2017-05-30 18:40:27',
            ),
            6 => 
            array (
                'client_id' => 1,
                'name' => 'Miss Flavie Luettgen I',
                'email' => 'bprohaska@gmail.com',
                'password' => '$2y$10$6olTRvBIsys0zSsXTbBCuOmx4Mmz0641PaO5ZXctXZQhAgGymmype',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:27',
                'updated_at' => '2017-05-30 18:40:27',
            ),
            7 => 
            array (
                'client_id' => 1,
                'name' => 'German Klocko',
                'email' => 'rogahn.frederik@fisher.org',
                'password' => '$2y$10$ngBytOECvW6WkvW/j8kJVOAuYKDhMfp9AKJj/Uxig5sctkMUawe8G',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:27',
                'updated_at' => '2017-05-30 18:40:27',
            ),
            8 => 
            array (
                'client_id' => 1,
                'name' => 'Bill Bosco',
                'email' => 'ibuckridge@yahoo.com',
                'password' => '$2y$10$PPfRChHU/jY0deuB6F4vpeu/FiL48YbbSYBormErRR/dumePkncoG',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:28',
                'updated_at' => '2017-05-30 18:40:28',
            ),
            9 => 
            array (
                'client_id' => 1,
                'name' => 'Mr. Weston Ferry',
                'email' => 'winona.pfannerstill@hotmail.com',
                'password' => '$2y$10$BeZvr36VDyfP5Yo9EJ91H..2n56cRlhLxQNmLTIVPdFtNZAi3/efa',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:28',
                'updated_at' => '2017-05-30 18:40:28',
            ),
            10 => 
            array (
                'client_id' => 2,
                'name' => 'Libby Wehner III',
                'email' => 'vdaugherty@vandervort.com',
                'password' => '$2y$10$8R4vVyysLqQsMtE.SfjaKOmSNC4XS3m/dmsrbANyYwxEPjSVz9DAa',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:28',
                'updated_at' => '2017-05-30 18:40:28',
            ),
            11 => 
            array (
                'client_id' => 2,
                'name' => 'Dr. Clemmie Macejkovic',
                'email' => 'fay59@block.biz',
                'password' => '$2y$10$Pj.6PzUcC/bbXCNz48wyTOdJwgZZRYhqcaD8HIaXAuEtjEyDqH6IK',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:28',
                'updated_at' => '2017-05-30 18:40:28',
            ),
            12 => 
            array (
                'client_id' => 2,
                'name' => 'Kyler Lesch',
                'email' => 'marilou62@gulgowski.com',
                'password' => '$2y$10$lJqrF0KBWEGBeG/Lhd6Vc.RC1q/OTdMo4k3.hoar/SANfIC/6JdeK',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:28',
                'updated_at' => '2017-05-30 18:40:28',
            ),
            13 => 
            array (
                'client_id' => 2,
                'name' => 'Mr. Brian Pagac',
                'email' => 'jayde.anderson@cronin.com',
                'password' => '$2y$10$urpiwJFf0rDcOSB6kLWWduXqUHApeme.nCbQgYrQzYvcxLelkYA8.',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:28',
                'updated_at' => '2017-05-30 18:40:28',
            ),
            14 => 
            array (
                'client_id' => 2,
                'name' => 'Ms. Amina Jones MD',
                'email' => 'scottie.schowalter@hotmail.com',
                'password' => '$2y$10$11W9c5efTQ.9n9Xkc6FjN.tK9mNnPJ9h68TwygDzVONLw9y.LIxeS',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:28',
                'updated_at' => '2017-05-30 18:40:28',
            ),
            15 => 
            array (
                'client_id' => 2,
                'name' => 'Gordon Sporer DVM',
                'email' => 'martina94@von.com',
                'password' => '$2y$10$daJW19bZ7u2HYnrHX4KQdeMRu26VjbbSECIA3RQ9VqymKH05hIasm',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:28',
                'updated_at' => '2017-05-30 18:40:28',
            ),
            16 => 
            array (
                'client_id' => 2,
                'name' => 'Dr. Chaya Gulgowski III',
                'email' => 'fferry@gmail.com',
                'password' => '$2y$10$bFbjNK/gOF46f4Bg6yZzIu8h6NpFxRg25XRbgDj0KoU4SN3IZXX5G',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:28',
                'updated_at' => '2017-05-30 18:40:28',
            ),
            17 => 
            array (
                'client_id' => 2,
                'name' => 'Montana Romaguera',
                'email' => 'missouri.cronin@waters.net',
                'password' => '$2y$10$mCG8osdnskwBSb/YhZ2Ng.IxJJsLwwiL/PTUwh0g.dq0HgHiGJnuu',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:28',
                'updated_at' => '2017-05-30 18:40:28',
            ),
            18 => 
            array (
                'client_id' => 2,
                'name' => 'Miss Hellen Stanton Sr.',
                'email' => 'hickle.lily@towne.com',
                'password' => '$2y$10$k2QO.yL2a0MHR.Rr.H1PgeaMgIEEjVrEQPxFKvYd3V1kj306zz.fm',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:28',
                'updated_at' => '2017-05-30 18:40:28',
            ),
            19 => 
            array (
                'client_id' => 2,
                'name' => 'Prof. Rashawn Yost',
                'email' => 'angeline70@dach.info',
                'password' => '$2y$10$BpyN/J.wc1KS/uULPR8lfu2uWhsBg0/RY7DwnqDmvVH54GSnrBHY2',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:28',
                'updated_at' => '2017-05-30 18:40:28',
            ),
            20 => 
            array (
                'client_id' => 3,
                'name' => 'Cecile Spinka',
                'email' => 'emmanuel79@hotmail.com',
                'password' => '$2y$10$sBzxjds3JYhCwhsYPs2G..15AxgSZ/zbWazdemZlQbdjTfY5OQvta',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:28',
                'updated_at' => '2017-05-30 18:40:28',
            ),
            21 => 
            array (
                'client_id' => 3,
                'name' => 'Dr. Maximilian Osinski',
                'email' => 'goldner.ida@hotmail.com',
                'password' => '$2y$10$TPAl5zi8QdsPRs1FwZPDveanwlaRPA97MEwyWE1AnvGsD7v.wq2yG',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:28',
                'updated_at' => '2017-05-30 18:40:28',
            ),
            22 => 
            array (
                'client_id' => 3,
                'name' => 'Mr. Alec Stiedemann II',
                'email' => 'rutherford.marcella@gulgowski.biz',
                'password' => '$2y$10$lOrOhouSa92nSaJax6YyZev.THLGgJFcK9g8.griZOIGPyWe9thQm',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:28',
                'updated_at' => '2017-05-30 18:40:28',
            ),
            23 => 
            array (
                'client_id' => 3,
                'name' => 'Mr. Bart Cremin IV',
                'email' => 'jasen.bergnaum@yahoo.com',
                'password' => '$2y$10$c/8c/9FgKH.fWKr5Vrhe8OSHB9HcSfA9qHs3mY9x3eB9/zQg/pEQK',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:29',
                'updated_at' => '2017-05-30 18:40:29',
            ),
            24 => 
            array (
                'client_id' => 3,
                'name' => 'Mr. Trent West',
                'email' => 'frances.kris@gmail.com',
                'password' => '$2y$10$6uNOoLMLqe5bjzGFV.TxSe5BN9tZXaBNenJ3eFuZ7hndlNHM.hjP6',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:29',
                'updated_at' => '2017-05-30 18:40:29',
            ),
            25 => 
            array (
                'client_id' => 3,
                'name' => 'Dante Douglas',
                'email' => 'isabelle.abbott@gmail.com',
                'password' => '$2y$10$B6zC1tINQpo5oXerFtNrN.3fV3OI7C2/b2pFZ4nR.H3W0OAe5mmLS',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:29',
                'updated_at' => '2017-05-30 18:40:29',
            ),
            26 => 
            array (
                'client_id' => 3,
                'name' => 'Miss Opal Steuber IV',
                'email' => 'amann@jast.com',
                'password' => '$2y$10$AJ/OwI03LYBrCVvvxOIOjOz6ON4bFog7KKQMDXDMucS11roDdTqUu',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:29',
                'updated_at' => '2017-05-30 18:40:29',
            ),
            27 => 
            array (
                'client_id' => 3,
                'name' => 'Jan Rogahn Jr.',
                'email' => 'holly79@hilpert.net',
                'password' => '$2y$10$DIP2btnUlM8rO061PLCPreSKb7K5WCSyhn1Hv3tZNxWCX6WWEszHO',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:29',
                'updated_at' => '2017-05-30 18:40:29',
            ),
            28 => 
            array (
                'client_id' => 3,
                'name' => 'Miss Lia Rice PhD',
                'email' => 'ismitham@mcglynn.biz',
                'password' => '$2y$10$/d7K7kbSQmnXbY5jQSRdKOYVo9c04abpujwASluxSDFCKss0erO7y',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:29',
                'updated_at' => '2017-05-30 18:40:29',
            ),
            29 => 
            array (
                'client_id' => 3,
                'name' => 'Ressie Grady',
                'email' => 'hoppe.edwardo@yahoo.com',
                'password' => '$2y$10$6QWfSqzPRFM6cYEizW0enOGuplpLvka4EspU6x5msBXW7BV42uA0.',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:29',
                'updated_at' => '2017-05-30 18:40:29',
            ),
            30 => 
            array (
                'client_id' => 4,
                'name' => 'Ora Yost',
                'email' => 'bveum@gmail.com',
                'password' => '$2y$10$m7iHh3u3QXFXU8jsx9W07uS.nOeu77HiPzO3c56lSLGPEFc6ALfzG',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:29',
                'updated_at' => '2017-05-30 18:40:29',
            ),
            31 => 
            array (
                'client_id' => 4,
                'name' => 'Florine Labadie',
                'email' => 'paula.wilderman@williamson.com',
                'password' => '$2y$10$IuLfjWGkiNBPQ8bHUmrcB.VaLz7nq7iJngIXPlmvAMt5SX./WFH7W',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:29',
                'updated_at' => '2017-05-30 18:40:29',
            ),
            32 => 
            array (
                'client_id' => 4,
                'name' => 'Dr. Fredrick Corwin',
                'email' => 'christine.koelpin@boyer.com',
                'password' => '$2y$10$FkMjjm7V.NXHYrX9lQQn0OlhgDc.6cf0bzXDIHeC.QAigFODVgrPS',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:29',
                'updated_at' => '2017-05-30 18:40:29',
            ),
            33 => 
            array (
                'client_id' => 4,
                'name' => 'Collin Bailey',
                'email' => 'mark07@weimann.net',
                'password' => '$2y$10$Yh6SRLbdIoBcpg.ZbX2xyOvAi8Xz8MXvvqBHntxU4hEdVoe3675aq',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:29',
                'updated_at' => '2017-05-30 18:40:29',
            ),
            34 => 
            array (
                'client_id' => 4,
                'name' => 'Prof. Myriam Sauer',
                'email' => 'conn.kari@hotmail.com',
                'password' => '$2y$10$0VLcuHa.813tblv71cIb..vCFd3oQk9V3unBFpKqJoa27dw/uogei',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:29',
                'updated_at' => '2017-05-30 18:40:29',
            ),
            35 => 
            array (
                'client_id' => 4,
                'name' => 'Imani Dach',
                'email' => 'leilani13@grimes.com',
                'password' => '$2y$10$UNxGF/ok6OT63ohtl3VrUuBLM.A/X4HkDu/NELK7mwxYOq9N44.TW',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:29',
                'updated_at' => '2017-05-30 18:40:29',
            ),
            36 => 
            array (
                'client_id' => 4,
                'name' => 'Mazie Haag',
                'email' => 'hilma36@nienow.net',
                'password' => '$2y$10$r51XvXAhLpSwPH.5cZjq6OAth6pcEItG3qHvFDpTSWviEZ.OZ9W8S',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:29',
                'updated_at' => '2017-05-30 18:40:29',
            ),
            37 => 
            array (
                'client_id' => 4,
                'name' => 'Prof. Keanu Hintz',
                'email' => 'delfina.lind@goyette.net',
                'password' => '$2y$10$EFHwNkgsNqPmIObt8HAHmOD0ETzWwLXCCjhwnsGqT5GTnJDFyFKeu',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:29',
                'updated_at' => '2017-05-30 18:40:29',
            ),
            38 => 
            array (
                'client_id' => 4,
                'name' => 'Delta Leuschke',
                'email' => 'wellington84@veum.biz',
                'password' => '$2y$10$EVHs6o/VqMOEH4C8u65vIuhX3gxtuTJihjlVv2lyKnab6ZNZQxg6y',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:29',
                'updated_at' => '2017-05-30 18:40:29',
            ),
            39 => 
            array (
                'client_id' => 4,
                'name' => 'Dr. Hattie Reinger Sr.',
                'email' => 'sarah29@yahoo.com',
                'password' => '$2y$10$Qm4hkvYJXeQxKfZ8t1Lx2eTBHHN15dh1X5glEF4VRCJIQTppWZ5jq',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:30',
                'updated_at' => '2017-05-30 18:40:30',
            ),
            40 => 
            array (
                'client_id' => 5,
                'name' => 'Dr. Kiana Becker DVM',
                'email' => 'ntowne@hilll.org',
                'password' => '$2y$10$Oxy3VhOuiP4TCb5SCKvzwuPTaEFpnL8G9GUlgnSMojywLX26PcXsi',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:30',
                'updated_at' => '2017-05-30 18:40:30',
            ),
            41 => 
            array (
                'client_id' => 5,
                'name' => 'Fletcher Willms',
                'email' => 'annalise.leffler@armstrong.info',
                'password' => '$2y$10$YP5J6qVxNowuk.y8rnjibuVKOZ9DkKuu4eD5bWSLT5gNzmehBH5ki',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:30',
                'updated_at' => '2017-05-30 18:40:30',
            ),
            42 => 
            array (
                'client_id' => 5,
                'name' => 'Alyce Wyman',
                'email' => 'nhaley@leffler.com',
                'password' => '$2y$10$vJ/KIY6Rpt7QndtEQgfBg.Lh3TXskHgiOfxxlEEgqYuMGVYQDO/Q2',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:30',
                'updated_at' => '2017-05-30 18:40:30',
            ),
            43 => 
            array (
                'client_id' => 5,
                'name' => 'Jazlyn Kreiger',
                'email' => 'wbrakus@yahoo.com',
                'password' => '$2y$10$KpkrXw7sowF3hJBfIDLApu5uBK7esBtAR2IEE2mSLCqGAnzSkn1mK',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:30',
                'updated_at' => '2017-05-30 18:40:30',
            ),
            44 => 
            array (
                'client_id' => 5,
                'name' => 'Bill Cummerata PhD',
                'email' => 'moen.eda@hotmail.com',
                'password' => '$2y$10$7Rwla/FE15mbyTGi9OzfcOZ3ISxycKoDXqU.OZnW5zpMLI8Y1Uyr6',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:30',
                'updated_at' => '2017-05-30 18:40:30',
            ),
            45 => 
            array (
                'client_id' => 5,
                'name' => 'Ethel Schaden',
                'email' => 'bogan.ocie@hotmail.com',
                'password' => '$2y$10$jU3AySy4z5.NUK6QEj1hiudxDbkCCJpL5vdOOFTJRSE8.rf1Qdyaa',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:30',
                'updated_at' => '2017-05-30 18:40:30',
            ),
            46 => 
            array (
                'client_id' => 5,
                'name' => 'Mr. Brycen Bins PhD',
                'email' => 'torphy.alexandria@hotmail.com',
                'password' => '$2y$10$s6YZLc69O/pLTH7WZtDbVeL0c0T0BQwsgl3wtze7TRUzDoSrN2l5O',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:30',
                'updated_at' => '2017-05-30 18:40:30',
            ),
            47 => 
            array (
                'client_id' => 5,
                'name' => 'Jordan Klein',
                'email' => 'dejah56@yahoo.com',
                'password' => '$2y$10$PoIn3PXJ0fBqLGTjiKvFPuqp1Pmx25PGDbvasbi/0SHppB6JF7X8G',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:30',
                'updated_at' => '2017-05-30 18:40:30',
            ),
            48 => 
            array (
                'client_id' => 5,
                'name' => 'Antonio Wisoky',
                'email' => 'adele01@fahey.org',
                'password' => '$2y$10$sZUFnyPOUNBW2ifwGLLFpudfsIODSSh3xUUJYNII50Mx8/iCtOilS',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:30',
                'updated_at' => '2017-05-30 18:40:30',
            ),
            49 => 
            array (
                'client_id' => 5,
                'name' => 'Adonis Padberg',
                'email' => 'miller.brian@gmail.com',
                'password' => '$2y$10$FVRQUG3vpKBPE3OGqf94oOvs0RuxaF7WuBB7nga7R01o27Vs6z0.C',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:30',
                'updated_at' => '2017-05-30 18:40:30',
            ),
        ));
        
        
    }
}