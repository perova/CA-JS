-- Update acttribute to be of type "StringList"
-- Rows updated/added : 1
-- Pods : US1
DECLARE @Said INT = 5165
DECLARE @UserAttributeClassId BIGINT = 133623728678350536
IF EXISTS (SELECT 1 FROM dbo.mpEnvironment WHERE PodName = 'us1')
   BEGIN
       IF EXISTS (SELECT 1 FROM [dbo].[UserAttributeClass] WHERE [UserAttributeClassId] = @UserAttributeClassId)
           BEGIN
               UPDATE UserAttributeClass
               SET AttributeClassTypeId = 7
               WHERE name = 'ds_segment_membership'
               AND SAId = @Said
               AND UserAttributeClassId = @UserAttributeClassId
           END
   END

   