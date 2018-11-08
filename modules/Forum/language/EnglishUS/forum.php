<?php 
/*
 *	Made by Samerton
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr5
 *
 *  License: MIT
 *
 *  EnglishUS Language for Forum module
 */

$language = array(
	/*
	 *  Forums
	 */ 
	'forum' => 'Forum',
	'forums' => 'Forums',
	'forum_index' => 'Home',
	'no_users_online' => 'No users online.',
	'online_users' => 'Online Users',
	'discussion' => 'Discussion',
	'topic' => 'Topic',
	'stats' => 'Stats',
	'topics' => 'topics',
	'views' => 'views',
	'posts' => 'posts',
	'x_posts' => '{x} posts', // Don't replace {x}
	'x_topics' => '{x} topics', // Don't replace {x}
	'registered_x' => 'Joined: {x}', // Don't replace {x}
	'by' => 'by',
	'in' => 'in',
	'last_reply' => 'Last Reply',
	'latest_discussions' => 'Latest Discussions',
	'users_registered' => '<strong>Users Registered:</strong> {x}', // Don't replace "{x}"
	'latest_member' => '<strong>Latest Member:</strong> {x}', // Don't replace "{x}"
	'subforums' => 'Subforums',
	'subforum' => 'Subforum',
	'no_topics' => 'No topics have been created yet.',
	'no_topics_short' => 'No topics',
	'new_topic' => 'New Topic',
	'post_successful' => 'Post successful.',
	'post_edited_successfully' => 'Post edited successfully.',
	'user_tag' => 'You have been tagged in a post.',
	'user_tag_info' => 'You have been tagged in a post by {x}.', // Don't replace "{x}"
	'creating_topic_in_x' => 'Creating topic in {x}', // Don't replace "{x}"
	'topic_title' => 'Topic Title',
	'new_reply' => 'New Reply',
	're' => 'RE: ',
	'topic_locked' => 'Topic Locked',
	'mod_actions' => 'Moderation',
	'lock_topic' => 'Lock Topic',
	'unlock_topic' => 'Unlock Topic',
	'merge_topic' => 'Merge Topic',
	'merge_topics' => 'Merge Topics',
	'merge_instructions' => 'The thread to merge with <strong>must</strong> be within the same forum. Move a thread if necessary.',
	'confirm_delete_short' => 'Confirm deletion',
	'confirm_delete_topic' => 'Are you sure you want to delete this topic?',
	'confirm_delete_post' => 'Are you sure you want to delete this post?',
	'delete_topic' => 'Delete Topic',
	'move_topic' => 'Move Topic',
	'move_topic_to' => 'Move topic to:',
	'stick_topic' => 'Stick Topic',
	'unstick_topic' => 'Unstick Topic',
	'share' => 'Share',
	'share_twitter' => 'Share on Twitter',
	'share_facebook' => 'Share on Facebook',
	'edit' => 'Edit',
	'edit_post' => 'Edit Post',
	'last_edited' => 'Last edited: {x}', // Don't replace "{x}"
	'quote' => 'Quote',
	'topic_locked_notice' => 'This topic is locked, but your permissions allow you to create a reply.',
	'title_required' => 'Please input a topic title',
	'content_required' => 'Please input post content',
	'title_min_2' => 'Your topic title must be a minimum of 2 characters',
	'title_max_64' => 'Your topic title must be no longer than 64 characters',
	'content_min_2' => 'Your post content must be a minimum of 2 characters',
	'content_max_50000' => 'Your post content must be no longer than 50000 characters',
	'post_already_reported' => 'You have already reported this post!',
	'quoted_post' => 'Post added to quoted posts.',
	'removed_quoted_post' => 'Post removed from quoted posts.',
	'insert_quotes' => 'Insert Quotes',
	'quoting_posts' => 'Inserting quotes..',
	'error_quoting_posts' => 'Sorry, there was an error quoting those posts.',
	'error_rating_post' => 'Sorry, there was an error rating the post.',
	'topic_stuck' => 'Topic has been stuck.',
	'topic_unstuck' => 'Topic has been unstuck.',
	'spam_wait' => 'Please wait {x} seconds before posting again.',
	'overview' => 'Overview',
	'no_label' => 'No label',
	'forum_redirect_warning' => 'Notice: you are about to leave this site! Are you sure you want to proceed to {x}?',
	'follow' => 'Follow',
	'unfollow' => 'Unfollow',
	'now_following_topic' => 'You are now following this topic, and will be notified of any new replies.',
	'no_longer_following_topic' => 'You are no longer following this topic, and will not be notified of any new replies.',
	'new_reply_in_topic' => '{x} has replied to topic {y}', // Don't replace {x} (username) or {y} (topic title)
	
	// Homepage
	'latest_announcements' => 'Latest Announcements',
	'read_full_post' => 'Read full post',
	
	// Admin tab
	'labels' => 'Labels',
	'new_forum' => '<i class="fa fa-plus-circle"></i> New Forum',
	'new_label' => '<i class="fa fa-plus-circle"></i> New Label',
	'new_label_type' => '<i class="fa fa-plus-circle"></i> New Label Type',
	'label_types' => 'Label Types',
	'creating_label' => 'Creating new label',
	'creating_label_type' => 'Creating new label type',
	'editing_label' => 'Editing label',
	'editing_label_type' => 'Editing label type',
	'label_name' => 'Label Name',
	'label_type' => 'Label Type',
	'label_type_name' => 'Label Type Name',
	'label_type_html' => 'Label Type HTML',
	'label_type_html_help' => 'The HTML must include {x} as a placeholder for the label name',
	'label' => 'Label',
	'label_forums' => 'Label Forums',
    'label_groups' => 'Label Groups',
	'no_forums' => 'No forums',
	'no_labels_defined' => 'No labels have been defined yet.',
	'no_label_types_defined' => 'No label types have been defined yet.',
	'label_edit_success' => 'Label successfully edited.',
	'label_type_edit_success' => 'Label type successfully edited.',
	'label_creation_success' => 'Label created successfully.',
	'label_type_creation_success' => 'Label type created successfully.',
	'label_creation_error' => 'Error creating a label. Please ensure the name is no longer than 32 characters and that you have specified a type.',
	'label_type_creation_error' => 'Error creating a label type. Please ensure the name is no longer than 32 characters and that the HTML is no longer than 64 characters.',
	'creating_forum' => 'Creating new forum',
	'forum_name' => 'Forum Name',
	'forum_description' => 'Forum Description',
	'delete_forum' => 'Delete Forum',
	'move_topics_and_posts_to' => 'Move topics and posts to',
	'delete_topics_and_posts' => 'Delete topics and posts',
	'forum_permissions' => 'Forum permissions',
	'select_a_parent_forum' => 'Select a parent forum',
	'parent_forum' => 'Parent Forum',
	'has_no_parent' => 'No parent',
	'guests' => 'Guests',
	'group' => 'Group',
	'can_view_forum' => 'Can view forum?',
	'can_view_other_topics' => 'Can view other users\' topics?',
	'can_create_topic' => 'Can create topics?',
	'can_post_reply' => 'Can create replies?',
	'can_moderate_forum' => 'Can moderate forum?',
	'display_topics_as_news' => 'Display topics as news on front page?',
	'forum_created_successfully' => 'Forum created successfully.',
	'forum_layout' => 'Forum Layout',
	'table_view' => 'Table View',
	'latest_discussions_view' => 'Latest Discussions View',
	'input_forum_title' => 'Please input a forum title.',
	'input_forum_description' => 'Please input a forum description.',
	'forum_name_minimum' => 'The forum name must be a minimum of 2 characters.',
	'forum_description_minimum' => 'The forum description must be a minimum of 2 characters.',
	'forum_name_maximum' => 'The forum name must be a maximum of 150 characters.',
	'forum_description_maximum' => 'The forum description must be a maximum of 255 characters.',
	'forum_type' => 'Forum type',
	'forum_type_forum' => 'Forum',
	'forum_type_category' => 'Category',
	'invalid_action' => 'Invalid action',
	'use_reactions' => 'Use Reactions?',
	'redirect_forum' => 'Redirect forum?',
	'redirect_url' => 'Redirect URL',
	'invalid_redirect_url' => 'You have enabled the forum redirect, but you have not entered a valid URL between 1 and 512 characters.',
	'forum_icon' => 'Forum Icon',
	'forum_icon_maximum' => 'The forum icon must be a maximum of 256 characters.',
	'settings_updated_successfully' => 'Settings updated successfully.',
	'forum_updated_successfully' => 'Forum updated successfully.',
	'forum_deleted_successfully' => 'Forum deleted successfully.',
	'label_deleted_successfully' => 'Label deleted successfully.',
	'label_type_deleted_successfully' => 'Label type deleted successfully.',

    // Search
    'forum_search' => 'Forum Search',
    'search_again_in_x_seconds' => 'Please wait {x} seconds before searching again.',
    'search_results' => 'Search Results',
    'new_search' => 'New Search',
    'invalid_search_query' => 'Please enter a search query between 3 and 128 characters long.',
    'no_results_found' => 'No results found.',
	
	// Profile tab
	'user_no_posts' => 'This user has not made any forum posts yet.',
	'latest_posts' => 'Latest Posts',

	// UserCP
	'last_7_days_posts' => 'Forum posts (last 7 days)',
	'your_posts' => 'Your post count',
	'average_posts' => 'Average user post count',
	'total_posts' => 'Total post count',

    // Hooks
    'new_topic_hook_info' => 'New topic',
    'new_topic_text' => 'Topic created in {x} by {y}', // Don't replace {x} (forum name), optional variable {y} (topic author)
    'include_in_hook' => 'Include new topics from this forum in the webhook?',

	// Panel statistics
	'recent_topics' => 'Recent Topics',
	'recent_topics_statistic_icon' => '<i class="fas fa-comment"></i>',
	'recent_posts' => 'Recent Posts',
	'recent_posts_statistic_icon' => '<i class="far fa-comments"></i>',
	'topics_title' => 'Topics',
	'posts_title' => 'Posts',
);
