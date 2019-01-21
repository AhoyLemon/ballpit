<?php
/*******************************************************************************
* SEO Sitemap � 2012, Markus Kress - Kress.IT							       *
********************************************************************************
* KitSitemap.template.php													   *
********************************************************************************
* License http://creativecommons.org/licenses/by-sa/3.0/deed.de CC BY-SA 	   *
* Support for this software  http://kress.it and							   *
* http://custom.simplemachines.org/mods/index.php?mod=3393					   *
*******************************************************************************/

function template_kitsitemap_main()
{
	global $context;
		
	// display categories and boards
	if (!empty($context['categories']))
	{
		foreach ($context['categories'] as $category)
		{
			echo '<div><strong>' . $category['name'] . '</strong></div>';
			
			if (!empty($category['boards']))
			{
				echo '<ul>';
				foreach($category['boards'] as $board)
				{
					if ($board['is_redirect'])
					{
						continue;
					}
					echo '<li><a href="' . $board['href'] . '&action=kitsitemap">' . $board['name'] . '</a></li>';
				}
				echo '</ul>';
			}
		}
	}
}

function template_kitsitemap_xml_main()
{
	global $context;
		
	echo '<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
	// display categories and boards
	if (!empty($context['all_boards']))
	{
		foreach($context['all_boards'] as $board)
		{
			if ( $board['is_redirect'] || empty($board['num_topics']) )
			{
				continue;
			}
			echo '<sitemap><loc>' . htmlspecialchars($board['href']).'</loc></sitemap>';
		}
	}
	echo '</sitemapindex>';
}

function template_kitsitemap_board()
{
	global $context;
	
	if (!empty($context['boards']))
	{
		echo '<ul>';
		foreach($context['boards'] as $board)
		{
			if ($board['is_redirect'])
			{
				continue;
			}
			echo '<li><a href="' . $board['href'] . '&action=kitsitemap">' . $board['name'] . '</a></li>';
		}
		echo '</ul>';
	}
	
	echo '<div id="paging">' . $context['page_index'] . '</div>';
	// list topics
	if (!empty($context['topics']))
	{
		echo '<ol start="'.$context['page_info']['element_start'].'">';
		foreach($context['topics'] as $topic)
		{
			echo '<li>'.$topic['link'].'</li>';
		}
		echo '</ol>';
	}
}

function template_kitsitemap_xml_board()
{
	global $context;
			
	echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
	// list topics
	if (!empty($context['topics']))
	{
		foreach($context['topics'] as $topic)
		{
			echo '<url>
				<loc>'.htmlspecialchars($topic['href']).'</loc>
			</url>';
		}
	}
	echo '</urlset>';
}

function template_kitsitemap_above()
{
	global $context, $scripturl, $txt, $settings;
	
	//header
	echo '<!DOCTYPE html>
<head>
	<title>' . $context['kit_sitemap_title'] . $context['forum_name_html_safe'] . '</title>
	<link rel="stylesheet" type="text/css" href="', $settings['default_theme_url'], '/css/kitsitemap.css" />
	</head>
	<body>
	<div id="wrapper">
		<div id="header">';
	
		if (!empty($context['linktree']))
		{
			for($i=0; $i<count($context['linktree'])-1; $i++)
			{
				echo '<a href="'.str_replace($scripturl, $scripturl.'?action=kitsitemap', $context['linktree'][$i]['url']).'">'.$context['linktree'][$i]['name'].'</a> &raquo; ';
			}
			echo $context['last_linktree']['name'];
		}

	echo '	
	</div>';// close #header
	
	// show main url
	echo '
	<div id="full_version">
		'.$txt['kitsitemap_mainlink_desc'].' <a href="'.$context['last_linktree']['url'].'">'.$context['last_linktree']['name'].'</a>
	</div>';
	
	echo '
	<div id="content_section">';
}

function template_kitsitemap_below()
{
	global $scripturl;
	echo '
	</div>'; // close #content_section

	echo '
		<div id="footer_section">
			<div><a href="' . $scripturl . '?action=kitsitemap;xml">XML-Sitemap</a></div>
			SMF SEO-Sitemap by <a href="http://kress.it" target="_blank">kress.it</a>
		</div>
	</div>'; // close #wrapper
	
	echo '
	</body>
	</html>';
}

function template_kitsitemap_xml_above()
{
	echo '<?xml version="1.0" encoding="UTF-8"?>';
}

function template_kitsitemap_xml_below()
{

}

function template_kitsitemap_footer_above()
{

}

function template_kitsitemap_footer_below()
{
	global $context, $scripturl, $modSettings;
	if (!empty($context['categories']))
	{
		$count = 1;
		echo '<div class="sitemap_index centertext">';
		echo '<a href="' . $scripturl . '?action=kitsitemap">Sitemap</a>&nbsp;';
		
		if ( $modSettings['kit_sitemap_footer'] == 1 )
		{
			foreach ($context['categories'] as $category)
			{
				if (!empty($category['boards']))
				{
					foreach($category['boards'] as $board)
					{
						if ( isset($board['is_redirect']) )
						{
							if ($board['is_redirect'])
							{
								continue;
							}
							$link = str_replace('?', '?action=kitsitemap&', $board['href']);
							echo '<a href="' . $link . '">' . $count . '</a>&nbsp;';
							$count++;
						}
					}
				}
			}
		}
		echo '</div>';
	}
}
?>