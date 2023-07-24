<?php
namespace Aws\kendra;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWSKendraFrontendService** service.
 * @method \Aws\Result associateEntitiesToExperience(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateEntitiesToExperienceAsync(array $args = [])
 * @method \Aws\Result associatePersonasToEntities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associatePersonasToEntitiesAsync(array $args = [])
 * @method \Aws\Result batchDeleteDocument(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDeleteDocumentAsync(array $args = [])
 * @method \Aws\Result batchDeleteFeaturedResultsSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDeleteFeaturedResultsSetAsync(array $args = [])
 * @method \Aws\Result batchGetDocumentStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetDocumentStatusAsync(array $args = [])
 * @method \Aws\Result batchPutDocument(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchPutDocumentAsync(array $args = [])
 * @method \Aws\Result clearQuerySuggestions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise clearQuerySuggestionsAsync(array $args = [])
 * @method \Aws\Result createAccessControlConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAccessControlConfigurationAsync(array $args = [])
 * @method \Aws\Result createDataSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDataSourceAsync(array $args = [])
 * @method \Aws\Result createExperience(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createExperienceAsync(array $args = [])
 * @method \Aws\Result createFaq(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFaqAsync(array $args = [])
 * @method \Aws\Result createFeaturedResultsSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFeaturedResultsSetAsync(array $args = [])
 * @method \Aws\Result createIndex(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createIndexAsync(array $args = [])
 * @method \Aws\Result createQuerySuggestionsBlockList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createQuerySuggestionsBlockListAsync(array $args = [])
 * @method \Aws\Result createThesaurus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createThesaurusAsync(array $args = [])
 * @method \Aws\Result deleteAccessControlConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAccessControlConfigurationAsync(array $args = [])
 * @method \Aws\Result deleteDataSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDataSourceAsync(array $args = [])
 * @method \Aws\Result deleteExperience(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteExperienceAsync(array $args = [])
 * @method \Aws\Result deleteFaq(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFaqAsync(array $args = [])
 * @method \Aws\Result deleteIndex(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIndexAsync(array $args = [])
 * @method \Aws\Result deletePrincipalMapping(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePrincipalMappingAsync(array $args = [])
 * @method \Aws\Result deleteQuerySuggestionsBlockList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteQuerySuggestionsBlockListAsync(array $args = [])
 * @method \Aws\Result deleteThesaurus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteThesaurusAsync(array $args = [])
 * @method \Aws\Result describeAccessControlConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccessControlConfigurationAsync(array $args = [])
 * @method \Aws\Result describeDataSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDataSourceAsync(array $args = [])
 * @method \Aws\Result describeExperience(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeExperienceAsync(array $args = [])
 * @method \Aws\Result describeFaq(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFaqAsync(array $args = [])
 * @method \Aws\Result describeFeaturedResultsSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFeaturedResultsSetAsync(array $args = [])
 * @method \Aws\Result describeIndex(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIndexAsync(array $args = [])
 * @method \Aws\Result describePrincipalMapping(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePrincipalMappingAsync(array $args = [])
 * @method \Aws\Result describeQuerySuggestionsBlockList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeQuerySuggestionsBlockListAsync(array $args = [])
 * @method \Aws\Result describeQuerySuggestionsConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeQuerySuggestionsConfigAsync(array $args = [])
 * @method \Aws\Result describeThesaurus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeThesaurusAsync(array $args = [])
 * @method \Aws\Result disassociateEntitiesFromExperience(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateEntitiesFromExperienceAsync(array $args = [])
 * @method \Aws\Result disassociatePersonasFromEntities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociatePersonasFromEntitiesAsync(array $args = [])
 * @method \Aws\Result getQuerySuggestions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getQuerySuggestionsAsync(array $args = [])
 * @method \Aws\Result getSnapshots(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSnapshotsAsync(array $args = [])
 * @method \Aws\Result listAccessControlConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAccessControlConfigurationsAsync(array $args = [])
 * @method \Aws\Result listDataSourceSyncJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDataSourceSyncJobsAsync(array $args = [])
 * @method \Aws\Result listDataSources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDataSourcesAsync(array $args = [])
 * @method \Aws\Result listEntityPersonas(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEntityPersonasAsync(array $args = [])
 * @method \Aws\Result listExperienceEntities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listExperienceEntitiesAsync(array $args = [])
 * @method \Aws\Result listExperiences(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listExperiencesAsync(array $args = [])
 * @method \Aws\Result listFaqs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFaqsAsync(array $args = [])
 * @method \Aws\Result listFeaturedResultsSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFeaturedResultsSetsAsync(array $args = [])
 * @method \Aws\Result listGroupsOlderThanOrderingId(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGroupsOlderThanOrderingIdAsync(array $args = [])
 * @method \Aws\Result listIndices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listIndicesAsync(array $args = [])
 * @method \Aws\Result listQuerySuggestionsBlockLists(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listQuerySuggestionsBlockListsAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result listThesauri(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listThesauriAsync(array $args = [])
 * @method \Aws\Result putPrincipalMapping(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putPrincipalMappingAsync(array $args = [])
 * @method \Aws\Result query(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryAsync(array $args = [])
 * @method \Aws\Result startDataSourceSyncJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startDataSourceSyncJobAsync(array $args = [])
 * @method \Aws\Result stopDataSourceSyncJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopDataSourceSyncJobAsync(array $args = [])
 * @method \Aws\Result submitFeedback(array $args = [])
 * @method \GuzzleHttp\Promise\Promise submitFeedbackAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateAccessControlConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAccessControlConfigurationAsync(array $args = [])
 * @method \Aws\Result updateDataSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDataSourceAsync(array $args = [])
 * @method \Aws\Result updateExperience(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateExperienceAsync(array $args = [])
 * @method \Aws\Result updateFeaturedResultsSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFeaturedResultsSetAsync(array $args = [])
 * @method \Aws\Result updateIndex(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateIndexAsync(array $args = [])
 * @method \Aws\Result updateQuerySuggestionsBlockList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateQuerySuggestionsBlockListAsync(array $args = [])
 * @method \Aws\Result updateQuerySuggestionsConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateQuerySuggestionsConfigAsync(array $args = [])
 * @method \Aws\Result updateThesaurus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateThesaurusAsync(array $args = [])
 */
class kendraClient extends AwsClient {}
