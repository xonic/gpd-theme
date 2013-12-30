<?php
/**
 * Template Name: Regulations
 * Description: The page template for the entry regulations.
 *
 * @package WordPress
 * @subpackage GP Dolomiti
 */

get_header(); ?>

<section class="regulations">
	<div class="grid">
		<h1 class="section__title section__title--emphasized">
			<? _e("pre__rules__title", "gp-dolomiti"); ?>
		</h1>
		<h2>
			<? _e("pre__rules__subtitle", "gp-dolomiti"); ?>
		</h2>
		<dl>
			<dt>
				<? _e("pre__rules__a", "gp-dolomiti"); ?>
			</dt>
			<dd>
				<? _e("pre__rules__a__year", "gp-dolomiti"); ?>
			</dd>
			<dt>
				<? _e("pre__rules__b", "gp-dolomiti"); ?>
			</dt>
			<dd>
				<? _e("pre__rules__b__year", "gp-dolomiti"); ?>
			</dd>
			<dt>
				<? _e("pre__rules__c", "gp-dolomiti"); ?>
			</dt>
			<dd>
				<? _e("pre__rules__c__year", "gp-dolomiti"); ?>
			</dd>
			<dt>
				<? _e("pre__rules__d", "gp-dolomiti"); ?>
			</dt>
			<dd>
				<? _e("pre__rules__d__year", "gp-dolomiti"); ?>
			</dd>
			<dt>
				<? _e("pre__rules__e", "gp-dolomiti"); ?>
			</dt>
			<dd>
				<? _e("pre__rules__e__year", "gp-dolomiti"); ?>
			</dd>
		</dl>
	</div>
</section>

<?php get_footer(); ?>