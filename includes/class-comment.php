<?php

namespace Webmention;

/**
 * Undocumented class
 */
class Comment {
	/**
	 * Initialize the plugin, registering WordPress hooks
	 *
	 * @return void
	 */
	public static function init() {
		self::register_comment_types();
	}

	/**
	 * Register the comment types used by the Webmention plugin
	 *
	 * @return void
	 */
	public static function register_comment_types() {
		register_webmention_comment_type(
			'repost',
			array(
				'label'       => __( 'Repost', 'webmention' ),
				'desctiption' => __( 'A repost on the indieweb is a post that is purely a 100% re-publication of another (typically someone else\'s) post.', 'webmention' ),
				// translators: %1$s username, %2$s opject format (post, audio, ...), %3$s URL, %4$s domain
				'excerpt'     => __( '%1$s reposted %2$s on <a href="%3$s">%4$s</a>.', 'webmention' ),
			)
		);

		register_webmention_comment_type(
			'like',
			array(
				'label'       => __( 'Like', 'webmention' ),
				'description' => __( 'Like', 'webmention' ),
				// translators: %1$s username, %2$s opject format (post, audio, ...), %3$s URL, %4$s domain
				'excerpt'     => __( '%1$s liked %2$s on <a href="%3$s">%4$s</a>.', 'webmention' ),
			)
		);

		register_webmention_comment_type(
			'favorite',
			array(
				'label'       => __( 'Favorite', 'webmention' ),
				'description' => __( 'A favorite is a common webaction on many silos (like Flickr, Twitter), typically visually indicated with a star symbol that fills in with a color when activated (pink, orange).', 'webmention' ),
				// translators: %1$s username, %2$s opject format (post, audio, ...), %3$s URL, %4$s domain
				'excerpt'     => __( '%1$s favorited %2$s on <a href="%3$s">%4$s</a>.', 'webmention' ),
			)
		);

		register_webmention_comment_type(
			'tag',
			array(
				'label'       => __( 'Tag', 'webmention' ),
				'description' => __( 'Tags or tagging refers to categorizing or labeling content, your own or others (tag-reply), with words, phrases, names, or other information, optionally linked to specific people, events, locations, such as the practice of tagging posts being about certain people (person-tag), like tagging people or other items where (area-tag) they\'re depicted in a photo.', 'webmention' ),
				// translators: %1$s username, %2$s opject format (post, audio, ...), %3$s URL, %4$s domain
				'excerpt'     => __( '%1$s tagged %2$s on <a href="%3$s">%4$s</a>.', 'webmention' ),
			)
		);

		register_webmention_comment_type(
			'bookmark',
			array(
				'label'       => __( 'Bookmark', 'webmention' ),
				'description' => __( 'A bookmark (or linkblog) is a post that is primarily comprised of a URL, often title text from that URL, sometimes optional text describing, tagging, or quoting from its contents.', 'webmention' ),
				// translators: %1$s username, %2$s opject format (post, audio, ...), %3$s URL, %4$s domain
				'excerpt'     => __( '%1$s bookmarked %2$s on <a href="%3$s">%4$s</a>.', 'webmention' ),
			)
		);

		register_webmention_comment_type(
			'listen',
			array(
				'label'       => __( 'Listen', 'webmention' ),
				'description' => __( 'A "listen" is a passive type of post used to publish a song (music or audio track, including concert recordings or DJ sets) or podcast that you have listened to.', 'webmention' ),
				// translators: %1$s username, %2$s opject format (post, audio, ...), %3$s URL, %4$s domain
				'excerpt'     => __( '%1$s <strong>listened</strong> to %2$s (via <a href="%3$s">%4$s</a>).', 'webmention' ),
			)
		);

		register_webmention_comment_type(
			'watch',
			array(
				'label'       => __( 'Watch', 'webmention' ),
				'description' => __( 'A watch is a semi-passive type of post used to publish that you have watched a video (movie, TV, film), or a live show (theater, concert).', 'webmention' ),
				// translators: %1$s username, %2$s opject format (post, audio, ...), %3$s URL, %4$s domain
				'excerpt'     => __( '%1$s <strong>watched</strong> %2$s (via <a href="%3$s">%4$s</a>).', 'webmention' ),
			)
		);

		register_webmention_comment_type(
			'read',
			array(
				'label'       => __( 'Read', 'webmention' ),
				'description' => __( 'To read or reading is the act of viewing and interpreting posts or other documents; on the IndieWeb, a read post expresses that something has been read, like a book or section thereof.', 'webmention' ),
				// translators: %1$s username, %2$s opject format (post, audio, ...), %3$s URL, %4$s domain
				'excerpt'     => __( '%1$s <strong>read</strong> %2$s (via <a href="%3$s">%4$s</a>).', 'webmention' ),
			)
		);

		register_webmention_comment_type(
			'follow',
			array(
				'label'       => __( 'Follow', 'webmention' ),
				'description' => __( 'Follow is a common feature (and often UI button) in silo UIs (like Twitter) that adds updates from that profile (typically a person) to the stream shown in an integrated reader, and sometimes creates a follow post either in the follower\'s stream ("… followed …" or "… is following …") thus visible to their followers, and/or in the notifications of the user being followed ("… followed you").', 'webmention' ),
				// translators: %1$s username, %2$s opject format (post, audio, ...), %3$s URL, %4$s domain
				'excerpt'     => __( '%1$s <strong>followed</strong> %2$s (via <a href="%3$s">%4$s</a>).', 'webmention' ),
			)
		);

		register_webmention_comment_type(
			'reacji',
			array(
				'label'       => __( 'Reacji', 'webmention' ),
				'description' => __( 'Reacji is an emoji reaction, the use of a single emoji character in response to a post,', 'webmention' ),
				'excerpt'     => '%s',
			)
		);
	}
}