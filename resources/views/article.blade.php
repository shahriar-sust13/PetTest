
@extends('layout')

@include('font')

@section('content')

<link href="{{ asset('/css/article.css') }}" rel="stylesheet">

<div class="container article-page">
	<div class="article-box">
		<div class="article-item article-title">
			<h3>Foods That Your Cat should not Eat</h3>
		</div>
		<div class="article-item author-name">
			<h5>by <a href="#">Md. Nazim Uddin</a></h5>
		</div>
		<div class="article-item article-img">
			<img src="{{ url('images/blog/3.jpg') }}">
		</div>
		<div class="article-item article-content">
			<p>
				A multidimensional examination of personality in cats [43] served as a foundational study design, which used subjective trait ratings in a personality survey designed for rhesus monkeys (Macaca mulatta), which was modified following behavioural observation of cats in a laboratory over three months. Despite the limited generalizability of the sample (n = 14, female only, and laboratory environment), inter-cat social behaviour was observed and recorded, allowing successful validation of initial subjective assessments. Some of the methodological limitations or weaknesses of domestic cat personality studies conducted to date include: (1) lack of information on length of familiarity between cats and the people rating them [41]; (2) lack of acknowledgement of possible influence that researchers may have on cat behaviour when observing them in their homes [25]; (3) small sample sizes, such as 14 cats [43] or 40 cats [25, 41], with 440 cats representing the largest sample rated by their owners following recruitment over the Internet [38]; and (4) insufficient reporting of reliability assessments with inter-rater/observer reliability coefficients the most commonly reported values, conveying varying levels of agreement between raters/observers in their impressions of cat personality trait expression [25, 37, 41, 43].

				Another problem concerns the inconsistent nomenclature or labelling used for cat personality trait and factors. The dimension reduction technique principal components analysis (PCA), coupled with exploratory factor analysis (EFA), is recommended to analyse statistical correlations among personality traits that cluster together creating overall components [34]. For example, the highest factor loadings on traits such as anxious, insecure, tense, and so on, have resulted in labelling the factor as Neuroticism [37]. The labelling of a factor as Feeding in one study [25], with its behavioural inclination makes its applicability to personality questionable [16]. Moreover, a lack of standardised personality factor labels and their corresponding traits is obstructing replication studies and consequently progress in cat personality research [38]. Thus, a standardised use of terms guided by previous research [44], such as the well-established human FFM nomenclature is recommended.

				Following identification of personality factors, researchers should assess consistency of these factors across situations [45], with evaluation of validity to determine whether the assessment tool actually measures personality [46]. For example, the two-step process [25, 43] allows subjective ratings to be converged with coded behaviours, in order to identify and validate personality factors with some respectable coefficients (e.g. > .70), thereby strengthening accuracy of findings. Content validity was likely compromised in one application of human personality traits to cats [38] since not all domains of cat personality may have been captured in their use of only the human FFM.
			</p>
		</div>
		<div class="article-item article-gap">
			
		</div>
	</div>
	<div class="page-gap">
			
	</div>
</div>

@endsection