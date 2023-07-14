<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blogs')->insert([
            [
                'title' => 'Developing Extraordinary Faith',
                'body' => 'In 2013, our friends Scott and Jen Obremski felt led to start a new church in Kansas City, Missouri. Upon hearing about this new venture, Ashley and I sensed that God wanted us to go too. We knew God was up to something special, because He spoke to many people—individuals, couples, and families—about participating in the endeavor.

                A total of forty-two people collectively struck their arrows through an enormous step of faith. Most of them lived in Springfield, Missouri, approximately three hours away from their soon-to-be new home city. Most left everything behind to start a new life.

                Among them were our friends Jon and Heather Torgeson. The Torgesons were a young couple full of enthusiasm to see God work in big ways. Jon had grown up in Springfield while Heather was from western Kansas. After Heather moved to Springfield for college, she met Jon, and they were married within two years. When the announcement about the Kansas City church plant was made, the Torgesons were the first to join the launch team.

                This was the biggest step of faith Jon and Heather had ever made. Jon immediately looked for any job he could find in Kansas City, not knowing anything about the city. After finding work as a custodian at the Kansas City Art Institute, he and Heather quit their jobs and prepared for the new adventure.

                This endeavor was no cakewalk. The Torgesons left all of their family to go to a place where they had no family. This was especially hard since Heather was eight months pregnant with their first child. Some may have thought this young couple was making a foolish decision. Could they secure health insurance in time? How would they pay for the upcoming labor and delivery expenses during a job transition? Why would they leave their family support system for a church that was only a concept? It made little sense, but God was in it.

                The Torgesons were the first to arrive in Kansas City, even before Scott and Jen. They knew the general area of the metro where the new church would be planted, but its exact location was not fully clear. Many unknowns still existed, but that didn’t stop the Torgesons from stepping into the new life God had for them—even though they had no idea how that new life would look.

                They secured a new apartment, selected a new ob-gyn, and began a new career all because God wanted them to help start a new church. Now that’s extraordinary faith. They enthusiastically jumped in with both feet to embrace the unknown, and God helped them immensely every step of the way. Eventually, the remaining others made the move, and a thriving new church was birthed in Kansas City on September 15, 2013.',
                'image' => 'blog_1.jpg',
                'author' => 'Jonathan Hardy',
            ],
            [
                'title' => "Deconstruction Isn’t the Bad Guy—Here’s Why",
                'body' => 'In 2013, our friends Scott and Jen Obremski felt led to start a new church in Kansas City, Missouri. Upon hearing about this new venture, Ashley and I sensed that God wanted us to go too. We knew God was up to something special, because He spoke to many people—individuals, couples, and families—about participating in the endeavor.

                A total of forty-two people collectively struck their arrows through an enormous step of faith. Most of them lived in Springfield, Missouri, approximately three hours away from their soon-to-be new home city. Most left everything behind to start a new life.

                Among them were our friends Jon and Heather Torgeson. The Torgesons were a young couple full of enthusiasm to see God work in big ways. Jon had grown up in Springfield while Heather was from western Kansas. After Heather moved to Springfield for college, she met Jon, and they were married within two years. When the announcement about the Kansas City church plant was made, the Torgesons were the first to join the launch team.

                This was the biggest step of faith Jon and Heather had ever made. Jon immediately looked for any job he could find in Kansas City, not knowing anything about the city. After finding work as a custodian at the Kansas City Art Institute, he and Heather quit their jobs and prepared for the new adventure.

                This endeavor was no cakewalk. The Torgesons left all of their family to go to a place where they had no family. This was especially hard since Heather was eight months pregnant with their first child. Some may have thought this young couple was making a foolish decision. Could they secure health insurance in time? How would they pay for the upcoming labor and delivery expenses during a job transition? Why would they leave their family support system for a church that was only a concept? It made little sense, but God was in it.

                The Torgesons were the first to arrive in Kansas City, even before Scott and Jen. They knew the general area of the metro where the new church would be planted, but its exact location was not fully clear. Many unknowns still existed, but that didn’t stop the Torgesons from stepping into the new life God had for them—even though they had no idea how that new life would look.

                They secured a new apartment, selected a new ob-gyn, and began a new career all because God wanted them to help start a new church. Now that’s extraordinary faith. They enthusiastically jumped in with both feet to embrace the unknown, and God helped them immensely every step of the way. Eventually, the remaining others made the move, and a thriving new church was birthed in Kansas City on September 15, 2013.',
                'image' => 'blog_2.jpg',
                'author' => 'Preston Ulmar',
            ],
            [
                'title' => "Pop Culture",
                'body' => 'In 2013, our friends Scott and Jen Obremski felt led to start a new church in Kansas City, Missouri. Upon hearing about this new venture, Ashley and I sensed that God wanted us to go too. We knew God was up to something special, because He spoke to many people—individuals, couples, and families—about participating in the endeavor.

                A total of forty-two people collectively struck their arrows through an enormous step of faith. Most of them lived in Springfield, Missouri, approximately three hours away from their soon-to-be new home city. Most left everything behind to start a new life.

                Among them were our friends Jon and Heather Torgeson. The Torgesons were a young couple full of enthusiasm to see God work in big ways. Jon had grown up in Springfield while Heather was from western Kansas. After Heather moved to Springfield for college, she met Jon, and they were married within two years. When the announcement about the Kansas City church plant was made, the Torgesons were the first to join the launch team.

                This was the biggest step of faith Jon and Heather had ever made. Jon immediately looked for any job he could find in Kansas City, not knowing anything about the city. After finding work as a custodian at the Kansas City Art Institute, he and Heather quit their jobs and prepared for the new adventure.

                This endeavor was no cakewalk. The Torgesons left all of their family to go to a place where they had no family. This was especially hard since Heather was eight months pregnant with their first child. Some may have thought this young couple was making a foolish decision. Could they secure health insurance in time? How would they pay for the upcoming labor and delivery expenses during a job transition? Why would they leave their family support system for a church that was only a concept? It made little sense, but God was in it.

                The Torgesons were the first to arrive in Kansas City, even before Scott and Jen. They knew the general area of the metro where the new church would be planted, but its exact location was not fully clear. Many unknowns still existed, but that didn’t stop the Torgesons from stepping into the new life God had for them—even though they had no idea how that new life would look.

                They secured a new apartment, selected a new ob-gyn, and began a new career all because God wanted them to help start a new church. Now that’s extraordinary faith. They enthusiastically jumped in with both feet to embrace the unknown, and God helped them immensely every step of the way. Eventually, the remaining others made the move, and a thriving new church was birthed in Kansas City on September 15, 2013.',
                'image' => 'blog_3.jpg',
                'author' => 'Peyton Jones',
            ],
            [
                'title' => "A Gendered Dilemma: The Unspoken Smiles Fellowship as an Avenue of Equality",
                'body' => 'In 2013, our friends Scott and Jen Obremski felt led to start a new church in Kansas City, Missouri. Upon hearing about this new venture, Ashley and I sensed that God wanted us to go too. We knew God was up to something special, because He spoke to many people—individuals, couples, and families—about participating in the endeavor.

                A total of forty-two people collectively struck their arrows through an enormous step of faith. Most of them lived in Springfield, Missouri, approximately three hours away from their soon-to-be new home city. Most left everything behind to start a new life.

                Among them were our friends Jon and Heather Torgeson. The Torgesons were a young couple full of enthusiasm to see God work in big ways. Jon had grown up in Springfield while Heather was from western Kansas. After Heather moved to Springfield for college, she met Jon, and they were married within two years. When the announcement about the Kansas City church plant was made, the Torgesons were the first to join the launch team.

                This was the biggest step of faith Jon and Heather had ever made. Jon immediately looked for any job he could find in Kansas City, not knowing anything about the city. After finding work as a custodian at the Kansas City Art Institute, he and Heather quit their jobs and prepared for the new adventure.

                This endeavor was no cakewalk. The Torgesons left all of their family to go to a place where they had no family. This was especially hard since Heather was eight months pregnant with their first child. Some may have thought this young couple was making a foolish decision. Could they secure health insurance in time? How would they pay for the upcoming labor and delivery expenses during a job transition? Why would they leave their family support system for a church that was only a concept? It made little sense, but God was in it.

                The Torgesons were the first to arrive in Kansas City, even before Scott and Jen. They knew the general area of the metro where the new church would be planted, but its exact location was not fully clear. Many unknowns still existed, but that didn’t stop the Torgesons from stepping into the new life God had for them—even though they had no idea how that new life would look.

                They secured a new apartment, selected a new ob-gyn, and began a new career all because God wanted them to help start a new church. Now that’s extraordinary faith. They enthusiastically jumped in with both feet to embrace the unknown, and God helped them immensely every step of the way. Eventually, the remaining others made the move, and a thriving new church was birthed in Kansas City on September 15, 2013.',
                'image' => 'blog_4.jpg',
                'author' => 'John Doe',
            ],
            [
                'title' => "The Three Burdens: Contemporaneous Consequences of Poor Oral Health",
                'body' => "In 2013, our friends Scott and Jen Obremski felt led to start a new church in Kansas City, Missouri. Upon hearing about this new venture, Ashley and I sensed that God wanted us to go too. We knew God was up to something special, because He spoke to many people—individuals, couples, and families—about participating in the endeavor.

                A total of forty-two people collectively struck their arrows through an enormous step of faith. Most of them lived in Springfield, Missouri, approximately three hours away from their soon-to-be new home city. Most left everything behind to start a new life.

                Among them were our friends Jon and Heather Torgeson. The Torgesons were a young couple full of enthusiasm to see God work in big ways. Jon had grown up in Springfield while Heather was from western Kansas. After Heather moved to Springfield for college, she met Jon, and they were married within two years. When the announcement about the Kansas City church plant was made, the Torgesons were the first to join the launch team.

                This was the biggest step of faith Jon and Heather had ever made. Jon immediately looked for any job he could find in Kansas City, not knowing anything about the city. After finding work as a custodian at the Kansas City Art Institute, he and Heather quit their jobs and prepared for the new adventure.

                This endeavor was no cakewalk. The Torgesons left all of their family to go to a place where they had no family. This was especially hard since Heather was eight months pregnant with their first child. Some may have thought this young couple was making a foolish decision. Could they secure health insurance in time? How would they pay for the upcoming labor and delivery expenses during a job transition? Why would they leave their family support system for a church that was only a concept? It made little sense, but God was in it.

                The Torgesons were the first to arrive in Kansas City, even before Scott and Jen. They knew the general area of the metro where the new church would be planted, but its exact location was not fully clear. Many unknowns still existed, but that didn’t stop the Torgesons from stepping into the new life God had for them—even though they had no idea how that new life would look.

                They secured a new apartment, selected a new ob-gyn, and began a new career all because God wanted them to help start a new church. Now that’s extraordinary faith. They enthusiastically jumped in with both feet to embrace the unknown, and God helped them immensely every step of the way. Eventually, the remaining others made the move, and a thriving new church was birthed in Kansas City on September 15, 2013.",
                'image' => 'blog_5.jpg',
                'author' => 'Jonathan Michael',
            ],
            [
                'title' => "Jesus Isn’t a Magic Genie",
                'body' => "In 2013, our friends Scott and Jen Obremski felt led to start a new church in Kansas City, Missouri. Upon hearing about this new venture, Ashley and I sensed that God wanted us to go too. We knew God was up to something special, because He spoke to many people—individuals, couples, and families—about participating in the endeavor.

                A total of forty-two people collectively struck their arrows through an enormous step of faith. Most of them lived in Springfield, Missouri, approximately three hours away from their soon-to-be new home city. Most left everything behind to start a new life.

                Among them were our friends Jon and Heather Torgeson. The Torgesons were a young couple full of enthusiasm to see God work in big ways. Jon had grown up in Springfield while Heather was from western Kansas. After Heather moved to Springfield for college, she met Jon, and they were married within two years. When the announcement about the Kansas City church plant was made, the Torgesons were the first to join the launch team.

                This was the biggest step of faith Jon and Heather had ever made. Jon immediately looked for any job he could find in Kansas City, not knowing anything about the city. After finding work as a custodian at the Kansas City Art Institute, he and Heather quit their jobs and prepared for the new adventure.

                This endeavor was no cakewalk. The Torgesons left all of their family to go to a place where they had no family. This was especially hard since Heather was eight months pregnant with their first child. Some may have thought this young couple was making a foolish decision. Could they secure health insurance in time? How would they pay for the upcoming labor and delivery expenses during a job transition? Why would they leave their family support system for a church that was only a concept? It made little sense, but God was in it.

                The Torgesons were the first to arrive in Kansas City, even before Scott and Jen. They knew the general area of the metro where the new church would be planted, but its exact location was not fully clear. Many unknowns still existed, but that didn’t stop the Torgesons from stepping into the new life God had for them—even though they had no idea how that new life would look.

                They secured a new apartment, selected a new ob-gyn, and began a new career all because God wanted them to help start a new church. Now that’s extraordinary faith. They enthusiastically jumped in with both feet to embrace the unknown, and God helped them immensely every step of the way. Eventually, the remaining others made the move, and a thriving new church was birthed in Kansas City on September 15, 2013.",
                'image' => 'blog_6.jpg',
                'author' => 'Jessie Wolf',
            ],

            [
                'title' => "Who Is My Neighbor?",
                'body' => "In 2013, our friends Scott and Jen Obremski felt led to start a new church in Kansas City, Missouri. Upon hearing about this new venture, Ashley and I sensed that God wanted us to go too. We knew God was up to something special, because He spoke to many people—individuals, couples, and families—about participating in the endeavor.

                A total of forty-two people collectively struck their arrows through an enormous step of faith. Most of them lived in Springfield, Missouri, approximately three hours away from their soon-to-be new home city. Most left everything behind to start a new life.

                Among them were our friends Jon and Heather Torgeson. The Torgesons were a young couple full of enthusiasm to see God work in big ways. Jon had grown up in Springfield while Heather was from western Kansas. After Heather moved to Springfield for college, she met Jon, and they were married within two years. When the announcement about the Kansas City church plant was made, the Torgesons were the first to join the launch team.

                This was the biggest step of faith Jon and Heather had ever made. Jon immediately looked for any job he could find in Kansas City, not knowing anything about the city. After finding work as a custodian at the Kansas City Art Institute, he and Heather quit their jobs and prepared for the new adventure.

                This endeavor was no cakewalk. The Torgesons left all of their family to go to a place where they had no family. This was especially hard since Heather was eight months pregnant with their first child. Some may have thought this young couple was making a foolish decision. Could they secure health insurance in time? How would they pay for the upcoming labor and delivery expenses during a job transition? Why would they leave their family support system for a church that was only a concept? It made little sense, but God was in it.

                The Torgesons were the first to arrive in Kansas City, even before Scott and Jen. They knew the general area of the metro where the new church would be planted, but its exact location was not fully clear. Many unknowns still existed, but that didn’t stop the Torgesons from stepping into the new life God had for them—even though they had no idea how that new life would look.

                They secured a new apartment, selected a new ob-gyn, and began a new career all because God wanted them to help start a new church. Now that’s extraordinary faith. They enthusiastically jumped in with both feet to embrace the unknown, and God helped them immensely every step of the way. Eventually, the remaining others made the move, and a thriving new church was birthed in Kansas City on September 15, 2013.",
                'image' => 'blog_7.jpg',
                'author' => 'Daisy Brooklyn',
            ],

            [
                'title' => "Discipling What’s Missing",
                'body' => "In 2013, our friends Scott and Jen Obremski felt led to start a new church in Kansas City, Missouri. Upon hearing about this new venture, Ashley and I sensed that God wanted us to go too. We knew God was up to something special, because He spoke to many people—individuals, couples, and families—about participating in the endeavor.

                A total of forty-two people collectively struck their arrows through an enormous step of faith. Most of them lived in Springfield, Missouri, approximately three hours away from their soon-to-be new home city. Most left everything behind to start a new life.

                Among them were our friends Jon and Heather Torgeson. The Torgesons were a young couple full of enthusiasm to see God work in big ways. Jon had grown up in Springfield while Heather was from western Kansas. After Heather moved to Springfield for college, she met Jon, and they were married within two years. When the announcement about the Kansas City church plant was made, the Torgesons were the first to join the launch team.

                This was the biggest step of faith Jon and Heather had ever made. Jon immediately looked for any job he could find in Kansas City, not knowing anything about the city. After finding work as a custodian at the Kansas City Art Institute, he and Heather quit their jobs and prepared for the new adventure.

                This endeavor was no cakewalk. The Torgesons left all of their family to go to a place where they had no family. This was especially hard since Heather was eight months pregnant with their first child. Some may have thought this young couple was making a foolish decision. Could they secure health insurance in time? How would they pay for the upcoming labor and delivery expenses during a job transition? Why would they leave their family support system for a church that was only a concept? It made little sense, but God was in it.

                The Torgesons were the first to arrive in Kansas City, even before Scott and Jen. They knew the general area of the metro where the new church would be planted, but its exact location was not fully clear. Many unknowns still existed, but that didn’t stop the Torgesons from stepping into the new life God had for them—even though they had no idea how that new life would look.

                They secured a new apartment, selected a new ob-gyn, and began a new career all because God wanted them to help start a new church. Now that’s extraordinary faith. They enthusiastically jumped in with both feet to embrace the unknown, and God helped them immensely every step of the way. Eventually, the remaining others made the move, and a thriving new church was birthed in Kansas City on September 15, 2013.",
                'image' => 'blog_8.jpg',
                'author' => 'Brooks Hooman',
            ],

            [
                'title' => "5 Reasons God Calls Us to Scary Things",
                'body' => "In 2013, our friends Scott and Jen Obremski felt led to start a new church in Kansas City, Missouri. Upon hearing about this new venture, Ashley and I sensed that God wanted us to go too. We knew God was up to something special, because He spoke to many people—individuals, couples, and families—about participating in the endeavor.

                A total of forty-two people collectively struck their arrows through an enormous step of faith. Most of them lived in Springfield, Missouri, approximately three hours away from their soon-to-be new home city. Most left everything behind to start a new life.

                Among them were our friends Jon and Heather Torgeson. The Torgesons were a young couple full of enthusiasm to see God work in big ways. Jon had grown up in Springfield while Heather was from western Kansas. After Heather moved to Springfield for college, she met Jon, and they were married within two years. When the announcement about the Kansas City church plant was made, the Torgesons were the first to join the launch team.

                This was the biggest step of faith Jon and Heather had ever made. Jon immediately looked for any job he could find in Kansas City, not knowing anything about the city. After finding work as a custodian at the Kansas City Art Institute, he and Heather quit their jobs and prepared for the new adventure.

                This endeavor was no cakewalk. The Torgesons left all of their family to go to a place where they had no family. This was especially hard since Heather was eight months pregnant with their first child. Some may have thought this young couple was making a foolish decision. Could they secure health insurance in time? How would they pay for the upcoming labor and delivery expenses during a job transition? Why would they leave their family support system for a church that was only a concept? It made little sense, but God was in it.

                The Torgesons were the first to arrive in Kansas City, even before Scott and Jen. They knew the general area of the metro where the new church would be planted, but its exact location was not fully clear. Many unknowns still existed, but that didn’t stop the Torgesons from stepping into the new life God had for them—even though they had no idea how that new life would look.

                They secured a new apartment, selected a new ob-gyn, and began a new career all because God wanted them to help start a new church. Now that’s extraordinary faith. They enthusiastically jumped in with both feet to embrace the unknown, and God helped them immensely every step of the way. Eventually, the remaining others made the move, and a thriving new church was birthed in Kansas City on September 15, 2013.",
                'image' => 'blog_9.jpg',
                'author' => 'Nick Hardy',
            ],

            [
                'title' => "Be challenged and encouraged with our featured article",
                'body' => "In 2013, our friends Scott and Jen Obremski felt led to start a new church in Kansas City, Missouri. Upon hearing about this new venture, Ashley and I sensed that God wanted us to go too. We knew God was up to something special, because He spoke to many people—individuals, couples, and families—about participating in the endeavor.

                A total of forty-two people collectively struck their arrows through an enormous step of faith. Most of them lived in Springfield, Missouri, approximately three hours away from their soon-to-be new home city. Most left everything behind to start a new life.

                Among them were our friends Jon and Heather Torgeson. The Torgesons were a young couple full of enthusiasm to see God work in big ways. Jon had grown up in Springfield while Heather was from western Kansas. After Heather moved to Springfield for college, she met Jon, and they were married within two years. When the announcement about the Kansas City church plant was made, the Torgesons were the first to join the launch team.

                This was the biggest step of faith Jon and Heather had ever made. Jon immediately looked for any job he could find in Kansas City, not knowing anything about the city. After finding work as a custodian at the Kansas City Art Institute, he and Heather quit their jobs and prepared for the new adventure.

                This endeavor was no cakewalk. The Torgesons left all of their family to go to a place where they had no family. This was especially hard since Heather was eight months pregnant with their first child. Some may have thought this young couple was making a foolish decision. Could they secure health insurance in time? How would they pay for the upcoming labor and delivery expenses during a job transition? Why would they leave their family support system for a church that was only a concept? It made little sense, but God was in it.

                The Torgesons were the first to arrive in Kansas City, even before Scott and Jen. They knew the general area of the metro where the new church would be planted, but its exact location was not fully clear. Many unknowns still existed, but that didn’t stop the Torgesons from stepping into the new life God had for them—even though they had no idea how that new life would look.

                They secured a new apartment, selected a new ob-gyn, and began a new career all because God wanted them to help start a new church. Now that’s extraordinary faith. They enthusiastically jumped in with both feet to embrace the unknown, and God helped them immensely every step of the way. Eventually, the remaining others made the move, and a thriving new church was birthed in Kansas City on September 15, 2013.",
                'image' => 'blog_10.png',
                'author' => 'Emily Jones',
            ],

        ]);
    }
}
