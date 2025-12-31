<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('faqs')->insert([
            [
                'question' => 'What is Business Process Management (BPM)?',
                'answer' => 'Business Process Management (BPM) is a systematic approach to designing, analyzing, optimizing, and automating business processes to improve efficiency, transparency, and overall organizational performance.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'How does ebSixOne BPM help my business?',
                'answer' => 'ebSixOne BPM helps your business by streamlining workflows, reducing manual effort, improving process visibility, and enabling automation. It allows organizations to manage tasks efficiently, make data-driven decisions, and achieve operational excellence.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Is ebSixOne BPM suitable for small and medium enterprises (SMEs)?',
                'answer' => 'Yes, ebSixOne BPM is highly suitable for small and medium enterprises (SMEs). It is scalable, easy to use, and cost-effective, allowing SMEs to optimize their processes without complex infrastructure or high implementation costs.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'What types of processes can be managed with ebSixOne BPM?',
                'answer' => 'ebSixOne BPM can manage a wide range of processes, including HR workflows, finance approvals, procurement, customer service processes, sales operations, compliance processes, and any custom business workflow specific to your organization.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Does ebSixOne BPM support modern technologies?',
                'answer' => 'Yes, ebSixOne BPM supports modern technologies and integrates seamlessly with existing systems. It is built with a modern architecture that supports APIs, cloud deployment, real-time analytics, and secure data handling.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'How can I get started with ebSixOne BPM?',
                'answer' => 'Getting started with ebSixOne BPM is simple. Contact our team for a demo, define your business processes, and configure workflows according to your needs. Our onboarding support ensures a smooth and quick implementation.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
