<?php

use Illuminate\Database\Seeder;

class VersesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('verses')->insert([
            [
                'id' => 1, 
                'user_id' => 1, 
                'reference' => '1 John 1:9', 
                'content' => 'If we confess our sins, he is faithful and just to forgive us our sins, and to cleanse us from all unrighteousness.', 
                'review_cat' => 'auto', 
                'tags' => 'fast.sk=3', 
                'ref_sort' => 'bible.62001009', 
                'started_at' => '2010-03-13', 
                'created_at' => '2010-04-25 00:00:00', 
                'updated_at' => '2010-06-04 10:06:29'
            ],
            [
                'id' => 2, 
                'user_id' => 1, 
                'reference' => 'Hebrews 10:24-25', 
                'content' => '24 And let us consider one another to provoke unto love and to good works:\r\n25 Not forsaking the assembling of ourselves together, as the manner of some is; but exhorting one another: and so much the more, as ye see the day approaching.', 
                'review_cat' => 'auto', 
                'tags' => 'fast.sk=5', 
                'ref_sort' => 'bible.58010024', 
                'started_at' => '2010-03-13', 
                'created_at' => '2010-04-25 00:00:00', 
                'updated_at' => '2010-07-29 06:06:32'
            ],
            [
                'id' => 3, 
                'user_id' => 1, 
                'reference' => 'Proverbs 3:5-6', 
                'content' => '5 Trust in the LORD with all thine heart; and lean not unto thine own understanding.\r\n6 In all thy ways acknowledge him, and he shall direct thy paths.', 
                'review_cat' => 'l', 
                'tags' => 'fast.sk=4', 
                'ref_sort' => 'bible.20003005', 
                'started_at' => '2010-03-13', 
                'created_at' => '2010-04-25 00:00:00', 
                'updated_at' => '2013-05-03 08:38:45'
            ],
            [
                'id' => 4, 
                'user_id' => 1, 
                'reference' => 'John 15:5', 
                'content' => 'I am the vine, ye are the branches: He that abideth in me, and I in him, the same bringeth forth much fruit: for without me ye can do nothing.', 
                'review_cat' => 'd', 
                'tags' => 'fast.sk=2', 
                'ref_sort' => 'bible.43015005', 
                'started_at' => '2010-03-13', 
                'created_at' => '2010-04-25 00:00:00', 
                'updated_at' => '2013-05-03 08:40:20'
            ],
            [
                'id' => 5, 
                'user_id' => 1, 
                'reference' => 'Jeremiah 31:3', 
                'content' => 'The LORD hath appeared of old unto me, saying, Yea, I have loved thee with an everlasting love: therefore with lovingkindness have I drawn thee.', 
                'review_cat' => 'auto', 
                'tags' => 'fast.sk=1', 
                'ref_sort' => 'bible.24031003', 
                'started_at' => '2010-03-20', 
                'created_at' => '2010-04-25 00:00:00', 
                'updated_at' => '2010-06-04 10:06:29'
            ],
            [
                'id' => 6, 
                'user_id' => 1, 
                'reference' => 'John 17:3', 
                'content' => 'And this is life eternal, that they might know thee the only true God, and Jesus Christ, whom thou hast sent.', 
                'review_cat' => 'auto', 
                'tags' => 'fast.bt=1.1', 
                'ref_sort' => 'bible.43017003', 
                'started_at' => '2010-03-20', 
                'created_at' => '2010-04-25 00:00:00', 
                'updated_at' => '2011-10-29 05:40:58'
            ],
            [
                'id' => 7, 
                'user_id' => 1, 
                'reference' => 'Philippians 4:13', 
                'content' => 'I can do all things through Christ which strengtheneth me.', 
                'review_cat' => 'auto', 
                'tags' => 'fast.bt=1.2', 'ref_sort' => 'bible.50004013', 
                'started_at' => '2010-03-20', 
                'created_at' => '2010-04-25 00:00:00', 
                'updated_at' => '2011-10-29 05:40:59'
            ]
        ]);
    }
}
